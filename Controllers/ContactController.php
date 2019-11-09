<?php

namespace Controllers;

<<<<<<< HEAD
require_once("BaseController.php");

use PHPMailer\Mail as Mail;


class ContactController extends BaseController
=======

use Util\Validate as Validate;
use PHPMailer\Mail as Mail;
use Controllers\HomeController as HomeController;

class ContactController 
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
{


    public function Index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            
<<<<<<< HEAD
            $email = $this->ValidateData($_POST["Email"]);
            $name = $this->ValidateData($_POST["Name"]);
            $lastName = $this->ValidateData($_POST["LastName"]);
            $subject = $this->ValidateData($_POST["Subject"]);
            $description = $this->ValidateData($_POST["Description"]);

            Mail::SendContactMail($subject,$email,$name,$lastName,$description);

            $this->ShowHomeView();
=======
            $email = Validate :: ValidateData($_POST["Email"]);
            $name = Validate :: ValidateData($_POST["Name"]);
            $lastName = Validate :: ValidateData($_POST["LastName"]);
            $subject = Validate :: ValidateData($_POST["Subject"]);
            $description = Validate :: ValidateData($_POST["Description"]);

            Mail::SendContactMail($subject,$email,$name,$lastName,$description);

            HomeController :: Index();
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
        }
        else {
            $this->View();
        }
    }





    public function View($alertMessage = "")
    {
        require_once(VIEWS_PATH . "ContactView.php");
    }
}


?>