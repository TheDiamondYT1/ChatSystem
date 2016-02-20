<?php

class Profile extends CI_Controller {

	public function index() {
		$this->load->model('profile_model','',TRUE);
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
    	$data['level'] = $session_data['level'];  
    	$username =  $session_data['username'];   
    	$id =  $session_data['id'];   

        //$this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('repeat_password','Repeat_password','required|matches[password]');
        $this->form_validation->set_message('required', '<div class="profile-item-data-error">You didnt fill in all fields!</div>');
        $this->form_validation->set_message('matches', '<div class="profile-item-data-error">Passwords dont match</div>');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header-side', $data);
            $this->load->view('frontend/profile', $data);
        } else {  
            $data['success'] = $this->profile_model->update($username, $id);
            $this->session->set_flashdata('msg','<div class="profile-item-data-succeed">Profile updated successfully!</div>');
            redirect('profile', 'refresh');
        }	
	}
}