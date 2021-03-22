<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teachers extends CI_Controller {
 

     public function index()
     {
        $this->load->model('teacher_model');
        $result['details']=$this->teacher_model->fetch_data();
        $this->load->view('admin/teacher',$result);
     }

      public function add_teacher()
      { 

            $config['upload_path']          = './public/teacher/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);


           $this->load->view('admin/add_teacher');
          if($this->input->post('btn_save'))
		       {
               if($this->upload->do_upload('image'))
                {
                   $upload_info = $this->upload->data();
                   
                  $path = ("public/teacher/".$upload_info['raw_name'].$upload_info['file_ext']);
                  
		        $data['id_no']=$this->input->post('id_no');
            $data['teacher_name']=$this->input->post('name');
            $data['teacher_gender']=$this->input->post('gender');
            $data['teacher_dob']=$this->input->post('dob');
            $data['teacher_email']=$this->input->post('email');
            $data['teacher_address']=$this->input->post('address');
            $data['teacher_pin_code']=$this->input->post('pin_code');
            $data['teacher_phone']=$this->input->post('phone');
            $data['image']=$path;
            
            $this->load->model('teacher_model');
            $user=$this->teacher_model->teacher_add($data);
              if($user>0)
              {
                      $this->session->set_flashdata('success', 'Insert Date Successfull.');
                      redirect('teachers');
              }
              else
              {
                  echo "Insert error !";
              }
		       }
          }
	    }
   
      public function fetch_id()
      {
        $id=$this->input->get('id');
        // echo $id;
        $this->load->model('teacher_model');
        $result['details']=$this->teacher_model->fetch_id($id);
        $this->load->view('admin/edit_teacher',$result);
        
      }

      public function update()
      {
        $id=$this->input->post('id');
         
            $config['upload_path']          = './public/teacher/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
       
          if($this->input->post('btn_save'))
            {
              if($this->upload->do_upload('image'))
              {
                $upload_info = $this->upload->data();
                   
                  $path = ("public/teacher/".$upload_info['raw_name'].$upload_info['file_ext']);

                $id_no=$this->input->post('id_no');
                $name=$this->input->post('name');
                $gender=$this->input->post('gender');
                $dob=$this->input->post('dob');
                $email=$this->input->post('email');
                $address=$this->input->post('address');
                $pin_code=$this->input->post('pin_code');
                $phone=$this->input->post('phone');
                $image=$path;
             $this->load->model('teacher_model');
             $save=$this->teacher_model->update_record($id_no,$name,$gender,$dob,$email,$address,$pin_code,$phone,$image,$id);

             if($save)
             {
              $this->session->set_flashdata('update', 'update Successfully.');
                      redirect('teachers');

             }
		         
            else
            {
              echo "Not Date updated !";
            }
              }
              else{
                $id_no=$this->input->post('id_no');
                $name=$this->input->post('name');
                $gender=$this->input->post('gender');
                $dob=$this->input->post('dob');
                $email=$this->input->post('email');
                $address=$this->input->post('address');
                $pin_code=$this->input->post('pin_code');
                $phone=$this->input->post('phone');
                
              $this->load->model('teacher_model');
              $save=$this->teacher_model->update_record_without($id_no,$name,$gender,$dob,$email,$address,$pin_code,$phone,$id);

             if($save)
             {
              $this->session->set_flashdata('update', 'update Successfully.');
                      redirect('teachers');

             }
              }
              
             
          }
      }         

      public function delete()
      {
         $id=$this->input->get('id');
         $this->load->model('teacher_model');
         $del=$this->teacher_model->teacher_delete($id);
         if($del)
         {
           $this->session->set_flashdata('delete', 'Delete Successfully.');
                      redirect('teachers');
         }
         else
         {
             echo "you can't delete this data";
         }
     }

       
      

}