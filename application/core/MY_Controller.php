<?php 
class MY_Controller extends CI_Controller {

    public $data =  array();

    function __construct() {
        parent::__construct();
        $this->load->model('Todo_M');
        $this->form_validation->set_error_delimiters('<div class="col-md-4 alert alert-danger">', '</div>');

    }
    
    
    
}

