<?php
class User_model extends CI_Model

  {
    function __construct()
      {
        parent::__construct();
        $this->load->database();
      }

    public function get_uuid_by_user($first, $last)
      {
        $this->robust->select('PrincipalID');
        $this->robust->from('useraccounts');
        $this->robust->where('FirstName', $first);
        $this->robust->where('LastName', $last);
        $this->robust->limit(1);
        $query = $this->robust->get();
      }

    public function get_hash_by_uuid($uuid)
      {
        $this->robust->select('passwordHash');
        $this->robust->from('auth');
        $this->robust->where('UUID', $uuid);
        $this->robust->limit(1);
      }

    public function get_salt_by_uuid($uuid)
      {
        $this->robust->select('passwordSalt');
        $this->robust->from('auth');
        $this->robust->where('UUID', $uuid);
        $this->robust->limit(1);
        $query = $this->robust->get();
      }

    public function check_my_id($salt, $hash, $pass)
      {
        $p = md5($pass);
        $attempt = md5($p . ":" . $salt);

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
        return $new;
      }
  }

?>