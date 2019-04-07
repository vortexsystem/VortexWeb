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
        $robust->select("friends.Friend, friends.Flags, concat(useraccounts.FirstName, ' ', useraccounts.LastName) AS 'name'");
        $robust->from('friends');
        $robust->where('friends.PrincipalID', $uuid);
        $query = $robust->get();
        $row = $query->result_array();
        if (isset($row))
          {
            return $row;
          }
      }
  }
?>
