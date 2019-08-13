<?php
class Friends_model extends CI_Model
  {
    function __construct()
      {
        parent::__construct();
      }
    public function get_friends($uuid)
      {
	$robust = $this->load->database('robust', TRUE);
        $estates = $this->load->database('estates', TRUE);
        $robust->select("Friends.Friend, Friends.Flags, concat(UserAccounts.FirstName, ' ', UserAccounts.LastName) AS 'name'");
        $robust->from(array('Friends','UserAccounts'));
        $robust->where('Friends.PrincipalID', $uuid);
        $query = $robust->get();
        $row = $query->result_array();
        if (isset($row))
          {
            return $row;
          }
      }
  }
?>
