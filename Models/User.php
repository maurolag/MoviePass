<?php
namespace Models;

class User
{
<<<<<<< HEAD
        private $idUser;
        private $email;
        private $userName;
=======
        private $email;
        private $user;
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
        private $password;
        private $birthdate;
        private $gender;
        private $isAdmin;
        private $changedPassword;
<<<<<<< HEAD
        private $photo;

        public function __construct($email, $userName, $password, $birthdate, $gender, $photo)
        {       
                $this->email = $email;
                $this->userName = $userName;
                $this->password = $password;
                $this->birthdate = $birthdate;
                $this->gender = $gender;
                $this->photo = $photo;
        }


        public function getIdUser()
        {
                return $this->idUser;
=======

        public function __construct($email, $user, $password, $birthdate, $gender)
        {
                $this->email = $email;
                $this->user = $user;
                $this->password = $password;
                $this->birthdate = $birthdate;
                $this->gender = $gender;
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
<<<<<<< HEAD
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of user
         */ 
        public function getUserName()
        {
                return $this->userName;
        }

        /**
         * Set the value of user
         *
         * @return  self
         */ 
        public function setUserName($userName)
        {
                $this->userName = $userName;

                return $this;
=======
         * Get the value of user
         */ 
        public function getUser()
        {
                return $this->user;
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
<<<<<<< HEAD
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
=======
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
         * Get the value of gender
         */ 
        public function getGender()
        {
                return $this->gender;
        }

        /**
<<<<<<< HEAD
         * Set the value of gender
         *
         * @return  self
         */ 
        public function setGender($gender)
        {
                $this->gender = $gender;

                return $this;
        }

        /**
=======
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
         * Get the value of birthdate
         */ 
        public function getBirthdate()
        {
                return $this->birthdate;
        }

<<<<<<< HEAD
         /**
         * Set the value of birthdate
         *
         * @return  self
         */ 
        public function setBirthdate($birthdate)
        {
                $this->birthdate = $birthdate;
=======
        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369

                return $this;
        }

        /**
         * Get the value of isAdmin
         */ 
        public function getIsAdmin()
        {
                return $this->isAdmin;
        }

        /**
         * Set the value of isAdmin
         *
         * @return  self
         */ 
        public function setIsAdmin($isAdmin)
        {
                $this->isAdmin = $isAdmin;

                return $this;
        }

        /**
         * Get the value of changedPassword
         */ 
        public function getChangedPassword()
        {
                return $this->changedPassword;
        }

        /**
         * Set the value of changedPassword
         *
         * @return  self
         */ 
        public function setChangedPassword($changedPassword)
        {
                $this->changedPassword = $changedPassword;

                return $this;
        }
<<<<<<< HEAD

        /**
         * Get the value of photo
         */ 
        public function getPhoto()
        {
                return $this->photo;
        }

        /**
         * Set the value of photo
         *
         * @return  self
         */ 
        public function setPhoto($photo)
        {
                $this->photo = $photo;

                return $this;
        }
=======
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369
}
