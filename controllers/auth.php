<?php

class Auth extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->library('authlib');
        $this->load->helper('url');
        $this->load->model('user');
        $this->load->model('add_employee_model');
//        $this->load->model('private_search_model');
    }
    
    public function index()
    {
        redirect('auth/login');
    }
    
    public function register()
    {
        $this->load->view('register_view',array('errmsg' => ''));
    }
    
    public function login()
    {
        $data['errmsg'] = '';
        $this->load->view('login_view', $data);
    }
    
    public function authenticate()
    {
        $username = $this->input->get('username');
        $password = $this->input->get('password');
        
        $user = $this->authlib->login($username, $password);
        
        if ($user !== false) 
        {            
            $this->load->view('private_search_view', array('name' => $user['first_name']));           
        }
        
        else 
        {
            $data['errmsg'] = 'Unable to login - please try again';
            $this->load->view('login_view');
        }
 
    }
    
    public function logout()
    {
        
        $this->user->logout();
    }
    
    public function add_employee()
    {
        $this->load->view('create_employee_view');
    }
    
    public function save_employee()
    {
        $firstname = $this->input->get('firstname');
        $lastname = $this->input->get('lastname');
        $gender = $this->input->get('gender');
        $DOB = $this->input->get('DOB');
        $jobtitle = $this->input->get('jobtitle');
        $dept = $this->input->get('dept');
        
        $username = $this->input->get('username');
        $password = $this->input->get('password');
        
        $this->add_employee_model->add_emp($firstname, $lastname, $gender, $DOB, $jobtitle, $dept, $username, $password);  
    }
    
    

//////This will not be used
//    public function createaccount()
//    {
//        $name = $this->input->get('name');
//        $username = $this->input->get('uname');
//        $password = $this->input->get('pword');
//        $conf_password = $this->input->get('conf_pword');
// 
//        if (!($errmsg = $this->authlib->register($name,$username,$password,$conf_password))) 
//        {
//            redirect('/auth/login');
//        }
//        else 
//        {
//            $data['errmsg'] = $errmsg;
//            $this->load->view('register_view',$data);
//        }
// 
//    }
}
?>
