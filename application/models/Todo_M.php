<?php 

class Todo_M extends MY_Model {
    
    protected $_table_name = 'todo';
    protected $_timestamps = true;
    
    function __construct() {
        parent::__construct();
    }
    public $rules = array(
        'title' => array(
            'field' => 'title', 
            'label' => 'Title', 
            'rules' => 'trim|required'
        ), 
        'status' => array(
            'field' => 'status', 
            'label' => 'Status', 
            'rules' => 'trim|required'
        ),
        'description' => array(
            'field' => 'description', 
            'label' => 'Description', 
            'rules' => 'trim|required'
        )
    );

    public function get_new() {
        
        $new_item =  new stdClass();

        $new_item->title = '';
        $new_item->status = '';
        $new_item->description= '';
        
        return $new_item;
    }

}
