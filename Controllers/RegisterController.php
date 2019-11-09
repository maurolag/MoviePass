<?php

namespace Controllers;

require_once("BaseController.php");

use DAO\UserDAO as UserDAO;
use Exception;
use Models\User as User;

class RegisterController extends BaseController
{
    private $userDAO;

    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }

    public function Index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $email = $this->ValidateData($_POST["email"]);
            $userName = $this->ValidateData($_POST["userName"]);
            $password = $this->ValidateData($_POST["password"]);
            $passwordConfirmed = $this->ValidateData($_POST["passwordConfirmed"]);
            $birthdate = $this->ValidateData($_POST["birthdate"]);
            $gender = $this->ValidateData($_POST["gender"]);
            
            if($gender == 1){
                $photo = FRONT_ROOT.VIEWS_PATH."img/girl-1.png";
            } else if($gender == 2){
                $photo = FRONT_ROOT.VIEWS_PATH."img/man-2.png";
            } else {
                $photo = FRONT_ROOT.VIEWS_PATH."img/other.png";
            }
            
            $this->ValidateRegister($email, $userName, $password, $passwordConfirmed, $birthdate);

            try {
                $password = BaseController::Hash($password); //hashing password                
                $selectedUser = $this->userDAO->Add(new User($email, $userName, $password, $birthdate, $gender, $photo));

                if ($selectedUser != null) {
                    $_SESSION['User'] = $selectedUser[0];
                    $_SESSION['isLogged'] = true;
                }                

                $this->ShowHomeView();

            } catch (Exception $e) {
                $this->View();
            }
        } else {
            $this->View();
        }
    }

    private function ValidateRegister($email, $userName, $password, $passwordConfirmed, $birthdate)
    {
        if ($password !== $passwordConfirmed)
            $this->View("Las contraseñas no coinciden");

        if ($this->userDAO->SearchUserByEmail($email) != null)
            $this->View("Ese E-mail pertenece a un usuario existente");
    }

    public function View($alertMessage = "")
    {
        require_once(VIEWS_PATH . "RegisterView.php");
    }
}
