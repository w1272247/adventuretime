<?php
class Edit extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('edit_model');
    }
    
    public function index()
    {
       $this->load->view('edit_delete_employee_view');
    }
    
    public function getEmployee()
    {
        $emp_no = $this->input->get('emp_no');
       
        $data['results'] = $this->edit_model->getEmployeeID($emp_no);

        $this->load->view('employee_details_view', $data);    
    }
    
    public function updateEmployee()
    {
        $emp_no = $this->input->get('emp_no');
        $firstname = $this->input->get('firstname');
        $lastname = $this->input->get('lastname');
        $gender = $this->input->get('gender');
        $DOB = $this->input->get('DOB');
        $jobtitle = $this->input->get('jobtitle');
        $dept = $this->input->get('dept');
        
        $username = $this->input->get('username');
        $password = $this->input->get('password');
        
        $data['results'] = $this->edit_model->updateEmployee($emp_no, $firstname, $lastname, $gender, $DOB, $jobtitle, $dept, $username, $password);
    }
    
    public function deleteEmployee()
    {
        $emp_no = $this->input->get('emp_no');
        $data['results'] = $this->edit_model->deleteEmployee($emp_no);
        print "emp_no";
    }
    
}
?>
