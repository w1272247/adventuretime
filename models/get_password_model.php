<?php

class Get_password_model extends CI_Model 
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
     function getPassword($username, $emp_no)
    {
        $username = $_GET['username']; 
        $emp_no = $_GET['emp_no'];

        
//        if (($firstname == "") || ($lastname == "") || ($jobtitle == ""))
//        {
//            print "Error, none of the text boxes must be empty";
//        }
//            
//        else 
//        {
//            print ($firstname);
//            print ($lastname);
//            print ($jobtitle);
//            print ($dept);
        //}


//      $this->db->select('*'); //Employees table
//      $this->db->select('salary, from_date, to_date');
        $this->db->from('authorise');
        
        
        $this->db->where(array('username' => $username, 'emp_no' =>$emp_no));
        $query = $this->db->get();
        
        return $query->result_array();
        
         print ($username);
         print ($emp_no);
    }
}
?>
