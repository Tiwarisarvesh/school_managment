<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('event_model');
        $save['display']=$this->event_model->display_event();
		$this->load->view('home',$save);
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function event()
	{
		$this->load->model('event_model');
        $save['display']=$this->event_model->display_event();
		$this->load->view('event',$save);
	}

	public function event_details()
	{
		$this->load->library('cart');
		$id=$this->input->get('id');
		$this->load->model('event_model');
        $result =$this->event_model->user_display_event($id);
        
		$data = array(
			'id'      => $result['id'],
			'qty'     => 1,
			'price'   => $result['event_price'],
			'name'    => $result['event_title'],
			'city'    => $result['event_city'],
			'sheet'    => $result['event_sheet']	
	);
	
	$this->cart->insert($data);
	// echo "<pre>";
	// print_r($check);
	// exit;

	redirect('welcome/event_display');
		
	}

	public function event_display()
	{
		$this->load->library('cart');
		$this->load->view('event_details');
	}

	function removeCartItem() 
	{
		$rowid=$this->input->get('id');   
        $data = array(
            'rowid'   => $rowid,
            'qty'     => 0
        );

        $save=$this->cart->update($data);
		if($save)
		{
			
			$this->session->set_flashdata('success', 'Product Delete Successfully...');
			redirect('welcome/event_display');
		}

}

	public function process_checkout()
	{
		$this->load->view('payumoney_form');
	}

	public function payment_success()
	{
		$this->load->view('success');
	}
    
	public function payment_failure()
	{
		$this->load->view('failure');
	}
	

	public function teacher()
	{
		$this->load->view('teacher');
	}

	public function course()
	{
		$this->load->view('course');
	}

	public function shop()
	{
		$this->load->view('shop');
	}
}
