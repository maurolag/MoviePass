<?php

namespace Controllers;

<<<<<<< HEAD
require_once("BaseController.php");
=======
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369

use DAO\UserDAO as UserDAO;
use Exception;
use Models\User as User;
<<<<<<< HEAD

class RegisterController extends BaseController
=======
use Util\Validate as Validate;
use Util\Hash as Hash;
use Controllers\HomeController as HomeController;

class RegisterController 
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
{
    private $userDAO;

    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }

    public function Index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
<<<<<<< HEAD
            
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
=======
            $email = Validate :: ValidateData($_POST["email"]);
            $user = Validate :: ValidateData($_POST["user"]);
            $password = Validate :: ValidateData($_POST["password"]);
            $passwordConfirmed = Validate :: ValidateData($_POST["passwordConfirmed"]);
            $birthdate = Validate :: ValidateData($_POST["birthdate"]);
            $gender = Validate :: ValidateData($_POST["gender"]);

            $this->ValidateRegister($email, $user, $password, $passwordConfirmed, $birthdate);

            try {
                $password = Hash::Hashing($password); //hashing password
                $selectedUser = $this->userDAO->Register(new User($email, $user, $password, $birthdate, $gender));
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369

                if ($selectedUser != null) {
                    $_SESSION['User'] = $selectedUser[0];
                    $_SESSION['isLogged'] = true;
                }                

<<<<<<< HEAD
                $this->ShowHomeView();

=======
                HomeController :: Index();
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
            } catch (Exception $e) {
                $this->View();
            }
        } else {
            $this->View();
        }
    }

<<<<<<< HEAD
    private function ValidateRegister($email, $userName, $password, $passwordConfirmed, $birthdate)
=======
    private function ValidateRegister($email, $user, $password, $passwordConfirmed, $birthdate)
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
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
