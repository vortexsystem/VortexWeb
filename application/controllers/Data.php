<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data extends CI_Controller
{
    public function index()
    {
        
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
        $sql          = '  SELECT friends.PrincipalID, CONCAT(useraccounts.FirstName, " ", useraccounts.LastName) AS "Friend" FROM friends,useraccounts WHERE friends.Friend = ? AND useraccounts.PrincipalID = friends.PrincipalID UNION SELECT friends.Friend, CONCAT(useraccounts.FirstName, " ", useraccounts.LastName) AS "Friend"  FROM friends, useraccounts WHERE friends.PrincipalID = ? AND useraccounts.PrincipalID = friends.Friend';
        $query        = $robust->query($sql, array(
            $current_user, $current_user
        ));
        
        $array  = $query->result_array();
        $myJSON = json_encode($array);
        
        echo $myJSON;
    }
    public function events()
    {
        echo json_encode("Error: Currently Unavailable");
    }
}
