<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function index()
    {
        $this->load->model('category_model');
        $display['data']=$this->category_model->display_category();
        $this->load->view('admin/category',$display);
        
    }
 
    public function insert()
    {
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_error_delimiters('<p class ="is-invalid" >', '</p>');

        if ($this->form_validation->run() == TRUE)
                {
                    if($this->input->post('btn_save'))
                        {
                            $data['category_name']=$this->input->post('category');
                            $data['category_status']=$this->input->post('radio');
                            $this->load->model('Category_model');
                            $user=$this->Category_model->insert($data);
                            if($user>0)
                            {
                                    echo "Records Saved Successfully";
                                    $this->session->set_flashdata('success', 'Category added Successfully.');
                                    redirect("category");
                            }
                            else{
                                    echo "Insert error !";
                            }
                        }
                }
                else
                {
                        $this->load->view('admin/create_category');
                }
    }

    public function edit_category_id()
    {
        $id=$this->input->get('id');
        $this->load->model('category_model');
        $display['data']=$this->category_model->get_by_id($id);
        $this->load->view('admin/edit_category',$display); 

    }

    public function edit_category()
    {
        $id=$this->input->post('id');
        
        if($this->input->post('btn_save'))
		{
		$category=$this->input->post('category');
		$radio=$this->input->post('radio');
        $this->load->model('category_model');
        $save=$this->category_model->update_category($category,$radio,$id);
        if($save)
        {
            $this->session->set_flashdata('update', 'Category Updated Successfully.');
            redirect("category");

        }
        else{
            echo "can not update successfully";
        }
        }

    }

    public function delete_category()
    {
        $id=$this->input->get('id');
        $this->load->model('category_model');
        $data=$this->category_model->delete_category($id);
        if($data)
        {
            $this->session->set_flashdata('delete', 'deleted Successfully.');
            redirect("category");
        }
        else{
            echo "can't delete successfuly";
        }
    }


}