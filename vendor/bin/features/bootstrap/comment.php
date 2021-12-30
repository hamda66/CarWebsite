<?php

class comment {

private $name, $email,$message,$country;

  private $comment;
  
  public function addGuestEmail($email) {
    $this->comment[]= $email;
  }

  public function addGuestname($name) {
    $this->comment[]= $name;
  }

  public function addGuestcountry($country) {
    $this->country[]= $country;
  }

  public function addGuestMessage($message) {
    $this->comment[]= $message;
  }
  
}

