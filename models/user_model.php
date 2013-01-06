<?php
class User_model extends CI_Model 
{
    function __construct()
    {
       parent::__construct();
       $this->load->database();
    }
 
    function finduser($uname, $pword)
    { 
        $this->db->where(array('username'=> $uname, 'password'=> $pword));
        
        $res = $this->db->get('authorise', array('name'));
        
        if($res->num_rows() != 1)
        {
            return false;
        }
        
         // remember login
        $session_id = $this->session->userdata('session_id');
        // remember current login
        $row = $res->row_array();        
        $this->db->insert('logins',array('name' => $row['name'],'session_id' => $session_id));
        return $res->row_array();

    }
    
    function is_loggedin()
    {
        $session_id = $this->session->userdata('session_id');
        $res = $this->db->get_where('logins',array('session_id' => $session_id));
        
        if ($res->num_rows() == 1) 
        {
            $row = $res->row_array();
            return $row['name'];
        }
        else 
        {
            return false;
        }
    }
    
}  

?>
