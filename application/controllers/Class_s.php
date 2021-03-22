<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Class_s extends CI_Controller {
 
    public function index()
    {
        
        $this->load->model('class_model');
        $display['display']=$this->class_model->class_display();
        $this->load->view('admin/class_s',$display);
        
    }

    public function add_class()
    {
        $this->load->view('admin/class_s');
        
    }

    public function getid_class()
    {
        $id=$this->input->get('id');
        $this->load->model('class_model');
        $save['data']=$this->class_model->class_getid($id);
        $this->load->view('admin/edit_class_s',$save);
    }

    public function update_class()
    {
        $postby_id=$this->input->post('id');
        
        if($this->input->post('btn_save'))
		{
		$class=$this->input->post('class');
		$radio=$this->input->post('radio');
	    
        $this->load->model('class_model');
		$save=$this->class_model->update_records($class,$radio,$postby_id);
        if($save)
        {
            echo "Date updated successfully !";
        }
        else{
            echo "not updated";
        }
		
		}
	}
 

    

}