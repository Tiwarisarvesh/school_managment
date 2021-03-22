<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
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
		$this->load->view('event');
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
