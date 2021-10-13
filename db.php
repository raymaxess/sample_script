<?php

class Db {
  private $db_host = '';
  private $db_user = "";
  private $db_pass = "";
  private $db_name = "";
  private $con = false;

  public function __construct($host, $user, $pass, $name) {
    $this->db_host = $host;
    $this->db_user = $user;
    $this->db_pass = $pass;
    $this->db_name = $name;
  }

  public function connect() {
    if(!$this->con) {
      $myconn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

      if($myconn) {
        $seldb = mysqli_select_db($myconn, $this->db_name);

        if($seldb) {
          $this->con = true;
          return $myconn;
        }
        else {
          return false;
        }
      }
      else {
        return false;
      }
    }
    else {
      return true;
    }
  }
}
?>