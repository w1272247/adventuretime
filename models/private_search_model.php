<?php

class Private_search_model extends CI_Model 
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function searchemployees($firstname, $lastname, $jobtitle, $dept)
    {
        $firstname = $_GET['firstname']; 
        $lastname = $_GET['lastname'];
        $jobtitle = $_GET['jobtitle']; 
        $dept = $_GET['dept']; 
        
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
        $this->db->from('employees');
        $this->db->join('titles', 'titles.emp_no = employees.emp_no');
        $this->db->join('salaries', 'salaries.emp_no = employees.emp_no');
    
        $this->db->join('dept_emp', 'dept_emp.emp_no = employees.emp_no');
        //$this->db->join('dept_manager', 'dept_manager.emp_no = employees.emp_no');
        
        $this->db->like('first_name', $firstname);
        $this->db->like('last_name', $lastname);
        $this->db->like('title', $jobtitle);
        
        
        
//        $this->db->where(array('first_name' => $fname, 'last_name' =>$lname, 'title' => $jobtitle, 'dept_name' => $dept));
        $query = $this->db->get();
        
        echo "Count : " . $query->num_rows(); //This returns the number of rows - need to incorporate to the JSON format
      
        return $query->result_array();
    }
}

?>
