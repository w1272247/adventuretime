<?php

class Edit_model extends CI_Model 
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    //GET EMPLOYEE NUMBER
    public function getEmployeeID($emp_no)
    {
        
        if(($emp_no == "")|| ($emp_no == null))
        {
            print "Error, you must enter employee number";
        }
      
        
        else
        {       
            $this->db->from('employees');
            $this->db->join('authorise', 'authorise.emp_no = employees.emp_no');
            $this->db->join('titles', 'titles.emp_no = employees.emp_no');
        
            $this->db->where('employees.emp_no', $emp_no);

            $query = $this->db->get();
        
            return $query->result_array();
            print ($emp_no);

        }
    }
    
    public function updateEmployee($emp_no, $firstname, $lastname, $gender, $DOB, $jobtitle, $dept, $username, $password)
    {
        if(($firstname == "") || ($lastname == "") || ($DOB == "") || ($jobtitle == "") || ($username == "") || ($password == ""))
        {
            print "Error, you must fill in all employee details";
        }
        else
        {
            $data = array('first_name'=>$firstname, 'last_name'=>$lastname, 'gender'=>$gender, 'birth_date'=>$DOB);
            $this->db->where('emp_no', $emp_no);
	    $this->db->insert('employees', $data);
            
            $data1 = array('title'=>$jobtitle);
            $this->db->where('emp_no', $emp_no);
	    $this->db->insert('titles', $data1);
            
            $data2 = array('username'=>$username, 'password'=>$password);
            $this->db->where('emp_no', $emp_no);
	    $this->db->insert('authorise', $data2);
            
            
            
            print ($emp_no);
           print ($firstname);
                print ($lastname);
                print ($DOB);
                print ($jobtitle);
                print ($dept);
                print ($gender);
                
                print ($username);
                print ($password);
        }
    }
    
    public function deleteEmployee($emp_no)
    {
        $this->db->where('emp_no', $emp_no);
        $this->db->delete('employees');
        
        echo "deleted";
    }
}
?>
