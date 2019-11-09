<?php

namespace Controllers;
<<<<<<< HEAD
require_once("BaseController.php");

class TicketsController extends BaseController
{
    public function View(){
        require_once(VIEWS_PATH . "TicketsView.php");
    }
}
?>
=======


use DAO\TicketsDAO as TicketsDAO;

class TicketsController 
{
    private $ticketDAO;

    public function __construct()
    {
        $this->ticketDAO = new TicketsDAO();
    }

    public function View(){
        $this->LoadOrders();
    }

    private function LoadOrders(){
        $Orders = $this->ticketDAO->LoadOrders($_SESSION['User']['IdUser']);
        require_once(VIEWS_PATH . "TicketsView.php");
    }
}
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
