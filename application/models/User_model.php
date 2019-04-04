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
        $this->db->select('PrincipalID');
        $this->db->from('useraccounts');
        $this->db->where('FirstName', $first);
        $this->db->where('LastName', $last);
        $this->db->limit(1);
        $query = $this->db->get();
        $row = $query->row();
        if (isset($row))
          {
            return $row->PrincipalID;
          }
      }
    public function get_hash_by_uuid($uuid)

      {
        $this->db->select('passwordHash');
        $this->db->from('auth');
        $this->db->where('UUID', $uuid);
        $this->db->limit(1);
        $query = $this->db->get();
        $row = $query->row();
        if (isset($row))
          {
            return $row->passwordHash;
          }
      }
    public function get_salt_by_uuid($uuid)

      {
        $this->db->select('passwordSalt');
        $this->db->from('auth');
        $this->db->where('UUID', $uuid);
        $this->db->limit(1);
        $query = $this->db->get();
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
  }
?>
