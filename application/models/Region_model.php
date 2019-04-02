<?php
class Region_model extends CI_Model
  {
    function __construct()
      {
        parent::__construct();
      }
    public function get_regions_by_owner_uuid($uuid, $limit)
      {
			  $robust = $this->load->database('robust', TRUE);
        $estates = $this->load->database('estates', TRUE);
        if(isset($limit))
        {
        $the_limit = $limit;
        }
        else
        {
        $the_limit = "100";
        }
        $robust->select('*');
        $robust->from('regions');
        $robust->where('owner_uuid', $uuid);
        $robust->limit($the_limit);
        $query = $robust->get();
        $row = $query->result_array();
        if (isset($row))
          {
            return $row;
          }
      }

public function get_estates_by_owner_uuid($uuid, $limit)
      {
	        $robust = $this->load->database('robust', TRUE);
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
public function get_region_info($uuid)
      {
	        $robust = $this->load->database('robust', TRUE);
        $estates = $this->load->database('estates', TRUE);
        $robust->select('*');
        $robust->from('regions');
        $robust->where('uuid', $uuid);
        $robust->limit('1');
        $query = $robust->get();
        $row = $query->result_array();
        if (isset($row))
          {
            return $row;
          }
}
public function get_estate_info($eid)
      {
	        $robust = $this->load->database('robust', TRUE);
        $estates = $this->load->database('estates', TRUE);
        $estates->select('*');
        $estates->from('estate_settings');
        $estates->where('EstateID', $eid);
        $estates->limit('1');
        $query = $estates->get();
        $row = $query->result_array();
        if (isset($row))
          {
            return $row;
          }
      }
  }
?>
