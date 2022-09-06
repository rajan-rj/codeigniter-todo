<?php
class Todo extends MY_Controller {
   public function __construct() {
        parent::__construct();
   }
   
   public function index() {
    
      $todos = $this->data['todos']  = $this->Todo_M->get();
      
      $this->data['subview'] = 'todo/index';
      $this->load->view('_layout_main',$this->data);
      

   }

   public function edit($id = null) {
      
      if ($id) {
         $this->data['item'] = $this->Todo_M->get($id);
      }
      else {
         $this->data['item'] = $this->Todo_M->get_new();
      }
      $this->data['id'] = $id;
      $data = $this->Todo_M->array_from_post(array('title','description','status'));

      $rules = $this->Todo_M->rules;

      $this->form_validation->set_rules($rules);
      // Process the form
      if ($this->form_validation->run() == TRUE) {
        
         $this->Todo_M->save($data,$id);
         redirect('todo/index');
      }
   
      $this->data['subview'] = 'todo/add';
      $this->load->view('_layout_main',$this->data);  
   }

   public function delete($id) {

      $this->Todo_M->delete($id);
      $this->session->set_flashdata('message', 'ToDo deleted successfully');
      redirect('todo/index');
   }
}
