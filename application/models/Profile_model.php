<?php

class Profile_model extends CI_Model
{

	public function update($username, $id) {
		$data = array(
			'username' => $username,
			'password'	=>	md5($this->input->post('password')),
			'id'	=>	$id
		);

		$this->db->where('id',$id);

		return $this->db->update('users',$data);			
	}	
}