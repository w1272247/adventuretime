<?php

class Test_controller extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('employee_model');
    }
    
    public function index()
    {
       $this->load->view('test_view');
    }
    
    function lookupById_xml()
    {
         $student_id = $this->input->post('id');
    $studentxml = $this->student->getById_xml($student_id);
    // tell browser we're sending back XML data
    $this->output->set_content_type('text/xml');
    echo $studentxml->saveXML();
    
     echo implode(':',$student);
    }
}
?>
