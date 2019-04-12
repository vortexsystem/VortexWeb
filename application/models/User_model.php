<?php
class User_model extends CI_Model

  {
    function __construct()
      {
        parent::__construct();
      }
    public function get_uuid_by_user($first, $last)
      {
			  $robust = $this->load->database('robust', true);
        $robust->select('PrincipalID');
        $robust->from('useraccounts');
        $robust->where('FirstName', $first);
        $robust->where('LastName', $last);
        $robust->limit(1);
        $query = $robust->get();
        $row = $query->row();
        if (isset($row))
          {
            return $row->PrincipalID;
          }
      }
    public function get_hash_by_uuid($uuid)
      {
	$robust = $this->load->database('robust', true);
        $robust->select('passwordHash');
        $robust->from('auth');
        $robust->where('UUID', $uuid);
        $robust->limit(1);
        $query = $robust->get();
        $row = $query->row();
        if (isset($row))
          {
            return $row->passwordHash;
          }
      }
    public function get_salt_by_uuid($uuid)
      {
			  $robust = $this->load->database('robust', true);
        $robust->select('passwordSalt');
        $robust->from('auth');
        $robust->where('UUID', $uuid);
        $robust->limit(1);
        $query = $robust->get();
        $row = $query->row();
        if (isset($row))
          {
            return $row->passwordSalt;
          }
      }
    public function check_my_id($salt, $hash, $pass)

      {
        $try = md5($pass);
        $attempt = md5($try . ":" . $salt);
        // $a2 = md5($attempt);
        if ($attempt == $hash)
          {
            return TRUE;
          }
        else
          {
            return FALSE;
          }
      }
    public function login($first, $last, $password)

      {
        $uuid = $this->get_uuid_by_user($first, $last);
        $hash = $this->get_hash_by_uuid($uuid);
        $salt = $this->get_salt_by_uuid($uuid);
        $new = $this->check_my_id($salt, $hash, $password);
        if ($new == "TRUE")
          {
            return $uuid;
          }
        else
          {
            return "FALSE";
          }
      }
	
  public function getUserInfo($id)
    {
	$robust = $this->load->database('robust', true);
        $q = $robust->get_where('useraccounts', array('PrincipalID' => $id), 1);  
        if($robust->affected_rows() > 0){
            $row = $q->row();
            return $row;
        }else{
            error_log('no user found getUserInfo('.$id.')');
            return false;
        }
    }
  }
?>
