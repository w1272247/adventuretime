<?php

class Password extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('get_password_model');

    }
    
    public function index()
    {
       $this->load->view('retrieve_password_view');
    }
    
    public function get_password()
    {
        $username = $this->input->get('username');
        $emp_no = $this->input->get('emp_no');
       
        $data['results'] = $this->get_password_model->getPassword($username, $emp_no); 

        $this->load->view('password_result_view', $data);
    }
}
?>
