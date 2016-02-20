<?php
class Users extends CI_Controller {
	function __construct() {
		parent::__construct();
        if ( !$this->session->userdata('logged_in'))
        { 
            redirect('login');
        }
   		$this->load->model('user_model','',TRUE);
	}

	public function index() {
	    $session_data = $this->session->userdata('logged_in');
	    $data['username'] = $session_data['username'];
        $data['level'] = $session_data['level'];
	    $data['id'] = $session_data['id'];

	    $data['users'] = $this->user_model->all();

		$this->load->view('templates/header-side', $data);
		$this->load->view('frontend/users', $data);
	}

	public function add() {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
    	$data['level'] = $session_data['level'];

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header-side', $data);
            $this->load->view('frontend/useradd');
        } else {  
            $this->user_model->add();
            $this->session->set_flashdata('msg','<div class="user-item-data-succeed">User created successfully!</div>');
            redirect('users', 'refresh');
        }		
	}

	public function edit($id) {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
    	$data['level'] = $session_data['level'];      

        $data['user_item'] = $this->user_model->all($id);

        if (empty($data['user_item'])) {
            show_404();
        }

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header-side', $data);
            $this->load->view('frontend/user', $data);
        } else {  
            $data['success'] = $this->user_model->update($id);
            $this->session->set_flashdata('msg','<div class="posts-item-data-succeed">User updated successfully!</div>');
            redirect('users', 'refresh');
        }
	}

	public function delete($id) {
        $this->user_model->delete($id);
        $this->session->set_flashdata('msg','<div class="user-item-data-succeed">User deleted successfully!</div>');
        redirect('users', 'refresh');
	}
}