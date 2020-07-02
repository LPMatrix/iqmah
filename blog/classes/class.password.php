<?php

    Class Password {

        public function __construct() {}

        public function hash_password($password){
           return $password = password_hash($password, PASSWORD_DEFAULT);
        }

        public function verify_password($password, $hash) {
            if (password_verify($password, $hash)) {
                return true;
            } else {
                return false;
            }
            

    }
}