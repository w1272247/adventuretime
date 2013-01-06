<?php

class Add_employee_model extends CI_Model 
{
    function __construct()
    {
       parent::__construct();
       $this->load->database();
    }
    
    function add_emp($firstname, $lastname, $gender, $DOB, $jobtitle, $dept, $username, $password)
    { 
        
        

        if (($firstname == "") || ($lastname == "") || ($dob == "")||($jobtitle == "")||($username == "")|| ($password == "")||($firstname == null) || ($lastname == null) || ($dob == null)||($jobtitle == null)||($username == null)|| ($password == null))
            {
                print "Error, none of the text boxes must be empty";
            }
        else 
            {
                $currentDate = date("Y-m-d");
        
        $this->db->insert_id();
        
        $data = array(
                      
	              'first_name'=>$firstname,
	              'last_name'=>$lastname,
	              'gender'=>$gender,
	              'hire_date'=>$currentDate,
	              'birth_date'=>$DOB
                      
            );
	    $this->db->insert('employees', $data);
        
          //AUTHORISE
         $this->db->insert_id();
         $data1 = array(            
                      'first_name'=>$firstname,
	              'last_name'=>$lastname,
	              'username'=>$username,
	              'password'=>$password
                      
            );
	    $this->db->insert('authorise', $data1);
        
        
        
        $firstname = $_GET['firstname']; 
        $lastname = $_GET['lastname']; 
        $dob = $_GET['DOB'];

        $jobtitle = $_GET['jobtitle']; 
        $dept = $_GET['dept']; 
        $gender = $_GET['gender']; 
        
        $username = $_GET['username'];
        $password = $_GET['password'];
            
                print ($firstname);
                print ($lastname);
                print ($dob);
                print ($jobtitle);
                print ($dept);
                print ($gender);
                print ($currentDate);
                
                print ($username);
                print ($password);
            }

        
        //$this->load->view('confirm_create_view');
    }
}
?>
