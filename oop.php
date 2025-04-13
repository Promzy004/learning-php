<?php


    class User {

        private $email;
        private $name;

        public function __construct($email,$name) {
            $this->email = $email;
            $this->name = $name;
        }

        public function login() {
            echo "$this->name logged in";
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            if(is_string($name) && strlen($name) > 1) {
                $this->name = $name;
            };

            return "name updated to $name";
        }
    }

    $user = new User('promiseedwin242@gmail.com', 'promise');
    echo $user->setName('pascal');
    echo $user->getName();



?>