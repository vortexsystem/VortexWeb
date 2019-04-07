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
        $robust->select('*');
        $robust->from('friends');
        $robust->where('PrincipalID', $uuid);
        $robust->limit('100');
        $query = $robust->get();
        $row = $query->result_array();
        if (isset($row))
          {
            return $row;
          }
      }
  }
?>
