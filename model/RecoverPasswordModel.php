<?php
class RecoverPasswordModel {
    private $id,$email,$password;
    
 public function __construct($id,$email,$pass) {
   $this->id=$id;
   $this->email=$email;
   $this->password=$pass;
 }
 function getId() {
     return $this->id;
 }

 function getEmail() {
     return $this->email;
 }

 function getPassword() {
     return $this->password;
 }

 function setId($id) {
     $this->id = $id;
 }

 function setEmail($email) {
     $this->email = $email;
 }

 function setPassword($password) {
     $this->password = $password;
 }


}
