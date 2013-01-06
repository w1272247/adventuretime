<?php

class Option_model extends CI_Model 
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function confirmUsername($username, $emp_no)
    {
        //GET ID
        $this->db->select('emp_no');
        //$emp_no = $this->db->get('authorise');
        
        //PUT USERNAME IN ARRAY
        $data = array('username'=>$username);
        

        //$username = $_GET['username']; 
        //$confusername = $_GET['confusername'];
        
        $this->db->where('emp_no', $emp_no);
        $this->db->update('authorise', $data); 
        
    }
    
    function confirmPassword($password, $emp_no)
    {
      //GET ID
        $this->db->select('emp_no');
        //$emp_no = $this->db->get('authorise');
        
        //PUT USERNAME IN ARRAY
        $data = array('password'=>$password);
        

        //$username = $_GET['username']; 
        //$confusername = $_GET['confusername'];
        
        $this->db->where('emp_no', $emp_no);
        $this->db->update('authorise', $data); 
        
    }
}

?>