<?php

class Find extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('private_search_model');
        $this->load->model('public_search_model');
    }
    
    public function index()
    {
       $this->load->view('private_search_view');
    }
   
    public function public_search()
    {
       $this->load->view('public_search_view');
    }
    
    //PRIVATE
    public function findemp()
    {       
        $firstname = $this->input->get('firstname');
        $lastname = $this->input->get('lastname');
        $jobtitle = $this->input->get('jobtitle');
        $dept = $this->input->get('dept');
        
        //if(($firstname == "") || ($lastname == "") || ($jobtitle == "" )|| ($dept == "" )|| ($firstname == null) ||($lastname == null )|| ($jobtitle == null) || ($dept == null))
        //{
        //    echo "Error, empty fields";   
        //}
        //else
        //{
            $data['results'] = $this->private_search_model->searchemployees($firstname, $lastname, $jobtitle, $dept); 

            $this->load->view('private_results_view', $data);

            echo json_encode($data)."\n"; // we turn the PHP array into a JSON string
        //}
    }
}

?>
