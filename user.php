<?php

class User {
    
   private $userId;
   private $db;
   
   public function __construct($db){
       $this->db = $db;
   }
   
   public function login($email, $password){
       
   }
   
   public function isLogged(){
       return !empty($this->userId);
   }
}
