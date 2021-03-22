<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
 
     public function index(){
         
        $this->load->model('student_model');
        $save['details']=$this->student_model->student_display();
        $this->load->view('admin/student',$save);
        

     }

      public function add_student()
     {
        $this->load->view('admin/add_student');
        if($this->input->post('btn_save'))
		{
            $data['student_roll']=$this->input->post('roll');
			$data['student_name']=$this->input->post('name');
			$data['student_gender']=$this->input->post('gender');
            $data['student_dob']=$this->input->post('dob');
            $data['student_religion']=$this->input->post('religion');
            $data['student_class']=$this->input->post('class');
            $data['student_phone']=$this->input->post('phone');
            $this->load->model('student_model');
            $user=$this->student_model->student_add($data);
			
			if($user>0){
                $this->session->set_flashdata('success', 'Insert Date Successfull.');
                redirect('student');
			}
			else{
					echo "Insert error !";
			}
		}
	}

     public function getid()
     {
         $id=$this->input->get('id');

       $this->load->model('student_model');
       $result['record']=$this->student_model->student_get_id($id);
       $this->load->view('admin/edit_student',$result);
         
     }

     public function update_student()
     {
          $id=$this->input->post('id');
            
		if($this->input->post('btn_save'))
		{
		$student_roll=$this->input->post('roll');
		$student_name=$this->input->post('name');
		$student_gender=$this->input->post('gender');
        $student_dob=$this->input->post('dob');
        $student_religion=$this->input->post('religion');
        $student_class=$this->input->post('class');
        $student_phone=$this->input->post('phone');
        
        $this->load->model('student_model'); 
		$result=$this->student_model->student_update($student_roll,$student_name,$student_gender,$student_dob,
        $student_religion,$student_class,$student_phone,$id);

         if($result)
         {
            $this->session->set_flashdata('update', 'Update Successfull.');
                redirect('student');
         }
         else{
             echo "Not Updated";
         }
		
		}
	}
	

     

     public function delete_student()
     {
        $id=$this->input->get('id');
        $this->load->model('student_model');
        $del=$this->student_model->student_delete($id);

        if($del)
        {
            echo "Date deleted not successfully !";
        }
        else{
            $this->session->set_flashdata('delete', 'Delete Successfull.');
                redirect('student');
        }
        
        
     }

}