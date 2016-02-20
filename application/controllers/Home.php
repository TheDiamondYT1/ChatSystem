<?php
class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
        if ( !$this->session->userdata('logged_in'))
        { 
            redirect('login');
        }
	}

	public function index()
	{
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
    $data['level'] = $session_data['level'];

	$this->load->view('templates/header-side', $data);
	$this->load->view('frontend/home', $data);
	}
	
	function logout()
	{
	$this->session->unset_userdata('logged_in');
	session_destroy();
	redirect('home', 'refresh');
	}
}