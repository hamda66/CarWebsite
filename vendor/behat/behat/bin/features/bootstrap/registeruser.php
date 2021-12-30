<?php

class registeruser {

private $Email, $Password;

  private $User;
  
  public function addEmail($Email) {
    $this->User[]= $Email;
  }

  public function addPassword($Password) {
    $this->User[]= $Password;
  }


  
}
