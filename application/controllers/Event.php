<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    public function index()
    {
        //$this->load->view('admin/add_event');
    }

    public function event_add()
    {
        $this->load->view('admin/add_event');
        if($this->input->post('btn_save'))
		{

            echo "heelo";
		    $data['event_title']=$this->input->post('title');
			$data['event_price']=$this->input->post('rupees');
			$data['event_city']=$this->input->post('city');
            $data['event_sheet']=$this->input->post('sheet');
            $data['event_book_start']=$this->input->post('start_date');
            $data['event_book_end']=$this->input->post('end_date');
            $data['event_discription']=$this->input->post('message');

            $this->load->model('event_model');
			$user=$this->event_model->event_saverecords($data);
			if($user>0)
            {
			        echo "Records Saved Successfully";
                    $this->session->set_flashdata('success', 'Event Saved Successfully.');
			}
			else{
					echo "Insert error !";
			}
		}
	}
    


}
?>