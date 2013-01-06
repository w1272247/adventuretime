<?php

class Option extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('option_model');
    }
    
    public function index()
    {
       $this->load->view('option_view');
    }
    
    public function changeUsername()
    {
        $this->load->view('change_username_view');
    }
    
    public function changePassword()
    {
        $this->load->view('change_password_view');
    }
    
    public function updateUsername()
    {
        $username = $this->input->get('username');
        $confusername = $this->input->get('confusername');
        $emp_no = $this->input->get('emp_no');
        
        //ADD VALIDATION IF
        
        if($username == $confusername)
        {
            $data['results'] = $this->option_model->confirmUsername($username, $emp_no); 

            $this->load->view('confirmation_update_view');//, $data);
        }
        else
        {
            echo "Username does not match!!";
        }
    }
    
    public function updatePassword()
    {
        $password = $this->input->get('password');
        $confpassword = $this->input->get('confpassword');
        $emp_no = $this->input->get('emp_no');
        
        //ADD VALIDATION IF
        
        if($password == $confpassword)
        {
            $data['results'] = $this->option_model->confirmPassword($password, $emp_no); 

            $this->load->view('confirmation_update_view');//, $data);     
        }
        else
        {
            echo "Passwords do not match!!";
        }
        
    }
    
}

?>
