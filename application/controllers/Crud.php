<?php

class Crud extends CI_Controller {
		public function __construct(){
		parent:: __construct();

		$this->load->model('m_data');

	}
	public function index (){
		$data = array(
			'tampil' => $this->m_data->tampil_data()->result()

		);
		$this->load->view('data', $data);
	}
	public function tambah (){
		$this->load->view('tambah_data');
	}
	public function add (){

		$data  = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'gender' => $this->input->post('gender')
			 );
		$this->M_data->insert($data);
		redirect('Crud');
	}
	public function edit ($id_data) {
		$where = array('id_data' => $id_data ); 
		$data ['data_edit'] = $this->m_data->lihat_data_id($where,'tb_data')->result();
		$this->load->view('edit_data', $data);
	}

		public function aksi_edit($id_data = NULL)
	{
		$data = array(
			'id_data' =>$id_data,
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'gender' => $this->input->post('gender')

			);
		$this->m_data->edit($data);
		$this->session->set_flashdata('pesan','Data berhasil diubah');
		redirect('Crud');
	}
		public function update (){
	        $id_data     = $this->input->post('id_data');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$no_hp = $this->input->post('no_hp');
			$gender = $this->input->post('gender');



		$data = array(
			'nama'	            => $nama,
			'alamat'	        => $alamat,
			'no_hp'	       		=> $no_hp,
			'gender'	        => $gender,


		);

		$where=array(
			'id_data'		=> $id_data
			);
		$this->M_data->edit_detail($where,$data,'tb_data');
		$this->session->set_flashdata('pesan', 'Data berhasil diganti');
            redirect('Crud');
	}

				public function hapus ($id_data= NULL)
	{
		$where = array('id_data' => $id_data);
		$this->M_data->hapus_data($where,'tb_data');
		$this->session->set_flashdata('message', '<div class="alert alert-danger text-white" role="alert">Data berhasil di hapus!</div>');
            redirect('Crud');
	}



}