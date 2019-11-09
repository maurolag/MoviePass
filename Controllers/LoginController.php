<?php

namespace Controllers;

<<<<<<< HEAD
require_once("BaseController.php");
=======

>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369

use DAO\UserDAO as UserDAO;
use Exception;
use PHPMailer\Mail as Mail;
use Models\User as User;
<<<<<<< HEAD

class LoginController extends BaseController
=======
use DAO\AddressDAO as AddressDAO;
use Util\Validate as Validate;
use Util\Hash as Hash;
use Util\Random as Random;

class LoginController
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
{
    private $userDAO;

    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }

    #region: LOGIN
    public function Index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
<<<<<<< HEAD
            $email = $this->ValidateData($_POST["email"]);
            $password = $this->ValidateData($_POST["pass"]);

            try {
                $password = BaseController::Hash($password);
                $selectedUser = $this->userDAO->LogIn($email, $password);
=======
            $user =Validate :: ValidateData($_POST["user"]);
            $password =Validate :: ValidateData($_POST["pass"]);

            try {
                $password = Hash :: Hashing($password);
                $selectedUser = $this->userDAO->LogIn($user, $password);
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369

                if ($selectedUser != null) {
                    $_SESSION['User'] = $selectedUser[0];                  
                    $_SESSION['isLogged'] = true;
<<<<<<< HEAD
                    $this->ShowHomeView();
=======
                    HomeController :: Index();
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
                } else {
                    $this->View("Email o contraseña incorrecta");
                }
            } catch (Exception $e) {
                $this->View("Ha ocurrido un error al intentar iniciar sesion");
            }
        } else {
            $this->View();
        }
    }

    public function LogInWithFacebookHandler()
    {
        require_once(FACEBOOK_PATH);
        //require_once('../FacebookLogIn/index.php');
        //require_once(FACEBOOK_PATH . "Config.php");


        //echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
    }

    public function RecoverPassword()
    {
<<<<<<< HEAD
        $email = $this->ValidateData($_POST["email"]);
=======
        $email =Validate :: ValidateData($_POST["email"]);
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369

        try {
            $selectedUser = new User(null, null, null, null, null,null);
            $selectedUser = $this->userDAO->SearchUserByEmail($email);
<<<<<<< HEAD
            $newPassword = $this->CreateRandomNumber(10);
=======
            $newPassword = Random :: CreateRandomNumber(10);
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369

            if ($selectedUser != null) {
                if (Mail::SendNewPassword($email, $selectedUser[0]["UserName"], $newPassword)) {
                    $this->View("Hemos enviado una nueva contraseña a su email, luego puede cambiarla en 
                    configuraciones al iniciar sesión si asi lo desea");
                } else {
                    $this->ShowForgotPasswordView("Ha ocurrido un error al enviar la nueva contraseña");
                }
                $selectedUser['NewPassword'] = $this->userDAO->UpdateUserPassword($email, BaseController::Hash($newPassword));
            } else {
                $this->ShowForgotPasswordView("Ese email no pertenece a ningun usuario registrado en MoviePass");
            }
        } catch (Exception $e) {
            $this->ShowForgotPasswordView("Ha ocurrido un error al intentar recuperar la contraseña");
        }
    }

    public function ShowForgotPasswordView($alertMessage = "")
    {
        require_once(VIEWS_PATH . "ForgotPasswordView.php");
    }

    public function View($alertMessage = "")
    {
        require_once(VIEWS_PATH . "LoginView.php");
    }

    public function Logout(){
        session_destroy();
        $this->View();  
    }

}
