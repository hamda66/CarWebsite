<?php

class registeruser {

private $Email, $Password;

  private $registeruser=[];
  
  public function addEmail($Email) {
    $this->registeruser[] = $Email;
  }

  public function addPassword($Password) {
    $this->registeruser = $Password;
  }


  
}
