<?php

namespace DAO;

use Controllers\BaseController;
use \Exception as Exception;
use DAO\IUserDAO as IUserDAO;
use Models\User as User;
<<<<<<< HEAD
use Models\Address as Address;
use DAO\Connection as Connection;
use DAO\AddressDAO as AddressDAO;
=======
use DAO\Connection as Connection;
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369

class UserDAO implements IUserDAO
{
    private $connection;
    private $tableName = "Users";

<<<<<<< HEAD
    public function LogIn($email, $password)
=======
    public function LogIn($user, $password)
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
    {
        $query = "SELECT * FROM " . $this->tableName .
            " WHERE (Email = :Email) AND UserPassword = :UserPassword;";

<<<<<<< HEAD
        $parameters["Email"] = $email;
=======
        $parameters["Email"] = $user;
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
        $parameters["UserPassword"] = $password;

        $this->connection = Connection::GetInstance();
        $result = $this->connection->Execute($query, $parameters, QueryType::Query);

        if ($result != null) {
            return $result;
        } else
            return null;
    }

<<<<<<< HEAD
    public function Add(User $user)
    {
        $query = "INSERT INTO " . $this->tableName . " (UserName, Email, UserPassword, IdGender, BirthDate,Photo, IsAdmin, ChangedPassword)
        VALUES (:userName, :email, :password, :gender, :birthdate, :photo, 0, 0);";

        $parameters["userName"] = $user->getUserName();
=======
    public function Register(User $user)
    {
        $query = "INSERT INTO " . $this->tableName . " (UserName,Email,UserPassword,IdGender,BirthDate,IdAddress,IsAdmin,ChangedPassword)
        VALUES (:user, :email, :password, :gender, :birthdate, :Address,0,0);";

        $parameters["user"] = $user->getUser();
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
        $parameters["email"] = $user->getEmail();
        $parameters["password"] = $user->getPassword();
        $parameters["gender"] = $user->getGender();
        $parameters["birthdate"] = $user->getBirthdate();
<<<<<<< HEAD
        $parameters["photo"] = $user->getPhoto();        

        $this->connection = Connection::GetInstance();
        $this->connection->ExecuteNonQuery($query, $parameters);
        
=======
        $parameters["Address"] = 1;

        $this->connection = Connection::GetInstance();
        $this->connection->ExecuteNonQuery($query, $parameters);

>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
        $user->setIsAdmin(false);
        $user->setChangedPassword(false);

        return $this->SearchUserByEmail($user->getEmail());
    }

    public function SearchUserByEmail($email)
    {
        $result = new User(null, null, null, null, null, null);

        $query = "SELECT * FROM " . $this->tableName .
            " WHERE Email = :email limit 1;";

        $parameters["email"] = $email;

        $this->connection = Connection::GetInstance();
        $result = $this->connection->Execute($query, $parameters, QueryType::Query);

        return $result;
    }

    public function UpdateUserPassword($email, $newPassword)
    {
        $query = "UPDATE " . $this->tableName . " SET UserPassword = '" . $newPassword . "' WHERE (:email = email);";

        $parameters["email"] = $email;

        $this->connection = Connection::GetInstance();
        $this->connection->ExecuteNonQuery($query, $parameters);
        return $newPassword;
    }

    public function UpdateUser(User $user)
    {
<<<<<<< HEAD
        $query = "UPDATE " . $this->tableName . " SET UserName = '" . $user->getUserName() . "',
        IdGender = " . $user->getGender() . ",
        Birthdate = '" . $user->getBirthdate() . "',
        Photo = '" . $user->getPhoto() . "' WHERE (email = :email);";
=======
        $query = "UPDATE " . $this->tableName . " SET UserName = '" . $user->getUser() . "',
        IdGender = " . $user->getGender() . ",
        Birthdate = '" . $user->getBirthdate() . "' WHERE (email = :email);";
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369

        $parameters["email"] = $user->getEmail();
        $this->connection = Connection::GetInstance();
        $this->connection->ExecuteNonQuery($query, $parameters);

        $result = array();
        

        return $this->SearchUserByEmail($user->getEmail());
    }

<<<<<<< HEAD
=======
    public function GetAll()
    {
        echo "Not implemented yet";
    }

    public function Add(User $user)
    { }
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
}
