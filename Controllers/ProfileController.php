<?php

namespace Controllers;
<<<<<<< HEAD
use DAO\City as City;
use DAO\UserDAO as UserDAO;
use Models\User as User;
require_once("BaseController.php");

class ProfileController extends BaseController
=======
use Models\Address as Address;
use DAO\City as City;
use DAO\UserDAO as UserDAO;
use Models\User as User;
use Util\Validate as Validate;
use Controllers\HomeController as HomeController;


class ProfileController 
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
{
    private $userDAO;

    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }

<<<<<<< HEAD
    public function View($alertMessage = "", $alertType = ""){
=======
    public function View(){
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
        require_once(VIEWS_PATH . "ProfileView.php");
    }

    public function Index(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = new User($_SESSION['User']['Email'],
<<<<<<< HEAD
                             $this->ValidateData($_POST["UserName"]),
                             null,
                             $this->ValidateData($_POST["BirthDate"]),
                             $this->ValidateData($_POST["gender"]),
                             $_SESSION['User']['Photo']);
=======
                             Validate :: ValidateData($_POST["UserName"]),
                             null,
                             Validate :: ValidateData($_POST["BirthDate"]),
                             Validate :: ValidateData($_POST["gender"]),
                             $_SESSION['User']['IdAddress']);
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369

            try {
                $result = $this->userDAO->UpdateUser($user);
                $_SESSION['User'] = $result[0];
<<<<<<< HEAD
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
=======
                $_SESSION['isLoged'] = true;
                HomeController :: Index();
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
            } catch (Exception $e) {
                $this->View();
            }
        } else {
            $this->View();
        }
    }


}
?>