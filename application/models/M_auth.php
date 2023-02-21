<?php

class M_auth extends CI_Model{
	public function cek_login(){
		$username = set_value('username');
		$password = set_value('password');

		$result	  = $this->db->where('username',$username)
							 ->where('password',$password)
							 ->limit(1)
							 ->get('tb_login');  
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

			public function login_pelanggan($username,$password)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where(array(
						'username' => $username, 
						'password' =>$password

	));
		return $this->db->get()->row();
	}
	}