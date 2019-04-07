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
	$sql = "SELECT friends.Friend, friends.Flags, concat(useraccounts.FirstName, ' ', useraccounts.LastName) AS 'name' from friends, useraccounts WHERE friends.Friend = useraccounts.principalID AND friends.PrincipalID = " . $robust->escape($uuid) . ";";
        $query = $robust->query($sql, '', FALSE);
        $row = $query;
        if (isset($row))
          {
            return $row;
          }
      }
  }
?>
