<?php

/**
 * 
 */
class Auth extends CI_Controller
{
	
	Public function login()
	{
		$this->form_validation->set_rules('username','Username','required',['required' => 'Username wajib diisi!']);
		$this->form_validation->set_rules('password','Password','required',['required' => 'Password wajib diisi!']);
		if ($this->form_validation->run() ==FALSE)
		{
			$this->load->view('page_login');
			
		}else{
			$auth = $this->M_auth->cek_login();

			if($auth == FALSE)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau password anda salah! <button type="button" class="Close" data-dismiss="alert" arial-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('auth/login');

			}else{
				$this->session->set_userdata('id_user',$auth->id_user);
				$this->session->set_userdata('username',$auth->username);
				$this->session->set_userdata('role_id',$auth->role_id);

				switch ($auth->role_id){
					case 1 : redirect('Home');
								break;
					case 2 : redirect('User');
								break;

					default: break;
				}
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}



    
}
