<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

     public function index()
     {
        $this->load->model('post_model');
        $result['data']=$this->post_model->display_post_categoery();
        $this->load->view('admin/post',$result);
        
     }

     public function create_post()
     {
        $this->load->model('category_model');
         $result['display']=$this->category_model->display_category();
         $this->load->view('admin/add_post',$result);
     }

     public function post_insert()
     {
         
        if($this->input->post('btn_save'))
		{
		    $data['post_code']=$this->input->post('code');
			$data['post_title']=$this->input->post('title');
			$data['post_categoery']=$this->input->post('Category');
            $data['post_number']=$this->input->post('number');
            $this->load->model('post_model');
			$user=$this->post_model->insert_post($data);
			if($user>0)
            {
                $this->session->set_flashdata('success', 'Records added Successfully.');
                redirect('post');
			}
			else{
					echo "Insert error !";
			}
		}  
     }

     public function edit_get_by_id()
     {
         $id=$this->input->get('id');
         
             $this->load->model('category_model');
             $result['display']=$this->category_model->display_category();

         $this->load->model('post_model');
         $result['displaydata']=$this->post_model->get_by_id_update($id);
         $this->load->view('admin/edit_post',$result);
         
     }

     public function update_post()
     {
         $id=$this->input->post('id');
         
        if($this->input->post('btn_save'))
		{
		$post_code=$this->input->post('code');
		$post_title=$this->input->post('title');
		$post_categoery=$this->input->post('Category');
        $post_number=$this->input->post('number');
        
        $this->load->model('post_model');
		$result=$this->post_model->post_update($post_code,$post_title,$post_categoery,$post_number,$id);
        if($result)
        {
            $this->session->set_flashdata('update', 'Update Successfully.');
            redirect('post');
        } else {
            echo "can't updated";
        }    
		
		}
     }

     public function delete_post()
     {
         $id=$this->input->get('id');
         $this->load->model('post_model');
        $del= $this->post_model->delete_post($id);
        if($del)
        {
            $this->session->set_flashdata('delete', 'Delete Successfully.');
            redirect('post');
        }else{
            echo "can't delete ";
        }
     }

    

}