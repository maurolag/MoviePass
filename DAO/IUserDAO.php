<?php
    namespace DAO;

    use Models\User as User;
    use DAO\Connection as Connection;

    interface IUserDAO
    {
        function Add(User $user);
<<<<<<< HEAD
=======
        function GetAll();
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
    }
?>