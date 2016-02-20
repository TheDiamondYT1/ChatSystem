<?php
Class User_model extends CI_Model
{
	function login($username, $password) {
		$this -> db -> select('id, level, username, password');
		$this -> db -> from('users');
		$this -> db -> where('username', $username);
		$this -> db -> where('password', MD5($password));
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function all($id = NULL) {
        if ($id === NULL)
        {
        	$this->db->order_by("id", "desc");	 
            $query = $this->db->get('users');
            return $query->result_array();
        }

        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();		
	}

	public function update($id) {
		$data = array(
			'username'	=>	$this->input->post('username'),
			'password'	=>	md5($this->input->post('password')),
			'id'	=>	$id
		);

		$this->db->where('id',$id);

		return $this->db->update('users',$data);		
	}

	public function add() {

	    $data = array(
	        'level' => '0',
	        'username' => $this->input->post('username'),
	        'password' => md5($this->input->post('password'))
	    );

	    return $this->db->insert('users', $data);		
	}

	public function delete($id) {
		$this->db->where('id',$id);

		return $this->db->delete('users');
	}
}
?>