<?php

class Employee_model extends CI_Model 
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function getById($sid)
    {
          $this->db->from('employees');
          $this->db->like('emp_no', $sid);
        // just some dummy data for now
        return array('mode' => 'UG','firstname' => 'Ly','lastname' => 'Zoltan','course' => 'BSc Computer Science');
    }
    
    public function getById_xml($sid)
    {
        // create DOMDocument object
    $root = new DOMDocument;
    // create root student node and add it to document DOM
    $student = $root->createElement("student");
    $root->appendChild($student);
    // now create firstname and lastname nodes and add them to root student node
    $firstname = $root->createElement("firstname","Ly");
    $lastname = $root->createElement("lastname","Zoltan");
    $student->appendChild($firstname);
    $student->appendChild($lastname);
    return $root;
    }
}
?>
