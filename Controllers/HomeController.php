<?php

namespace Controllers;

<<<<<<< HEAD
require_once("BaseController.php");
=======

>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369

use DAO\UserDAO as UserDAO;
use Exception;
use Models\User as User;

use function PHPSTORM_META\type;

<<<<<<< HEAD
class HomeController extends BaseController
=======
class HomeController 
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
{
    private $userDAO;

    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }

<<<<<<< HEAD
    public function Index()
=======
    public static function Index()
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
    {
        require_once(VIEWS_PATH."HomeView.php");
    }

    public function View($alertMessage = "")
    {
        require_once(VIEWS_PATH . "HomeView.php");
    }

}
