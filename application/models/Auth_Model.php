<?php

class Auth_Model extends CI_Model {

  public $table="tbl_users";
  public $content;
  public $date;

  public function __construct()
  {
          // Call the CI_Model constructor
          parent::__construct();
  }

  public function register_user($data)
  {
          // var_dump($data);
      $sql = "select email from tbl_users where email = '".$data['email']."';";
      $res = $this->db->query($sql);    
      
      if($res->num_rows() > 0) {
        return 'Already Email Exists';
      } 
      else {
        
        $data['password'] = md5($data['password']);        
        $sql = "insert into tbl_users values ('".$data['fullname']."','". $data['email']."','".$data['password']."','".$data['type']."')";
        
        $this->db->query($sql);
        return 'success';
      }
  }

  public function login_user($data) {
      $sql = "select * from tbl_users where email = '".$data['email']."' and password = '".md5($data["password"])."'";
      $res = $this->db->query($sql);    
      
      
      if($res->num_rows() > 0) {
        return $res->result();
      } 
      else {
        return 'incorrect';
      }
  }
}
