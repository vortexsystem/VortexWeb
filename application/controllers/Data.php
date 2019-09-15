<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data extends CI_Controller
{
    public function index()
    {
        $path = $this->config->item('grid_info');
        
        // Read entire file into string 
        $xmlfile = file_get_contents($path);
        
        // Convert xml string into an object 
        $new = simplexml_load_string($xmlfile);
        
        // Convert into json 
        $con          = json_encode($new);
        // Convert into associative array 
        $newArr       = json_decode($con, true);
        $current_user = $this->session->uuid;
        
        
        $array     = array(
            "base_url" => base_url(),
            "user_name" => $this->session->name,
            "logged_in" => $this->session->logged_in,
            "grid_url" => $this->config->item('grid_url')
        );
        $finaltext = array_merge($array, $newArr);
        $myJSON    = json_encode($finaltext);
        
        echo $myJSON;
    }
    public function groups()
    {
        $current_user = $this->session->uuid;
        $robust       = $this->load->database('robust', TRUE);
        $sql          = "SELECT os_groups_groups.GroupID, os_groups_groups.Name FROM os_groups_membership, os_groups_groups WHERE os_groups_membership.PrincipalID = ? AND os_groups_membership.GroupID = os_groups_groups.GroupID";
        $query        = $robust->query($sql, array(
            $current_user
        ));
        
        $array  = $query->result_array();
        $myJSON = json_encode($array);
        
        echo $myJSON;
    }
    public function friends()
    {
        $current_user = $this->session->uuid;
        $robust       = $this->load->database('robust', TRUE);
        $sql          = 'SELECT Friends.PrincipalID, CONCAT(UserAccounts.FirstName, " ", UserAccounts.LastName) AS "Name" FROM Friends,UserAccounts WHERE Friends.Friend = ? AND UserAccounts.PrincipalID = Friends.PrincipalID UNION SELECT Friends.Friend, CONCAT(UserAccounts.FirstName, " ", UserAccounts.LastName) AS "Name" FROM Friends, UserAccounts WHERE Friends.PrincipalID = ? AND UserAccounts.PrincipalID = Friends.Friend;';
        $query        = $robust->query($sql, array(
            $current_user,
            $current_user
        ));
        $array        = $query->result_array();
        
        $myJSON = json_encode($array);
        
        
        echo $myJSON;
    }
    public function events()
    {
        echo json_encode("Error: Currently Unavailable");
    }
}
