<?php
class Region_model extends CI_Model

  {
    function __construct()
      {
        parent::__construct();
        $this->load->database();
      }
    public function get_regions_by_owner_uuid($uuid, $limit)
      {
        if(isset($limit))
        {
        $the_limit = $limit;
        }
        else
        {
        $the_limit = "100";
        }
        $this->db->select('*');
        $this->db->from('regions');
        $this->db->where('owner_uuid', $uuid);
        $this->db->limit($the_limit);
        $query = $this->db->get();
        $row = $query->result_array();
        if (isset($row))
          {
            return $row;
          }
      }

	public function get_estates_by_owner_uuid($uuid, $limit)
      {
		$estates = $this->load->database('estates', TRUE);
        if(isset($limit))
        {
        $the_limit = $limit;
        }
        else
        {
        $the_limit = "100";
        }
        $estates->select('*');
        $estates->from('estate_settings');
        $estates->where('EstateOwner', $uuid);
        $estates->limit($the_limit);
        $query = $estates->get();
        $row = $query->result_array();
        if (isset($row))
          {
            return $row;
          }
      }
  }
?>
