<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/dashboard');
    }

    public function student()
    {
        $this->load->view('admin/student');
    }

}
