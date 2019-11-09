<?php

namespace Controllers;
use DAO\City as City;
use DAO\UserDAO as UserDAO;
use Models\User as User;
require_once("BaseController.php");

class ProfileController extends BaseController
{
    private $userDAO;

    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }

    public function View($alertMessage = "", $alertType = ""){
        require_once(VIEWS_PATH . "ProfileView.php");
    }

    public function Index(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = new User($_SESSION['User']['Email'],
                             $this->ValidateData($_POST["UserName"]),
                             null,
                             $this->ValidateData($_POST["BirthDate"]),
                             $this->ValidateData($_POST["gender"]),
                             $_SESSION['User']['Photo']);

            try {
                $result = $this->userDAO->UpdateUser($user);
                $_SESSION['User'] = $result[0];
                $alertMessage = "Se a actualizado satisfactoriamente su perfil!" ;
                $alertType = "success";
                $this->View($alertMessage, $alertType);
            } catch (Exception $e) {
                $this->View();
            }
        } else {
            $this->View();
        }
    }

    public function ChangeImageProfile(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $newImage = $_POST["photo"];

            $user = new User($_SESSION['User']['Email'],
                                $_SESSION['User']['UserName'],
                                null,
                                $_SESSION['User']['Birthdate'],
                                $_SESSION['User']['IdGender'],
                                $this->ValidateData($_POST["photo"]));
            
            try {
                $result = $this->userDAO->UpdateUser($user);
                $_SESSION['User'] = $result[0];
                $alertMessage = "Se a actualizado su imagen de perfil!" ;
                $this->View($alertMessage);
            } catch (Exception $e) {
                $this->View();
            }
        } else {
            $this->View();
        }
    }


}
?>