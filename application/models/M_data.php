<?php
class M_data extends CI_Model {

	public function insert ($data) {
		$this->db->insert('tb_data', $data);
	}
	public function tampil_data() {
		return $this->db->get('tb_data');
	}
			public function lihat_data_id ($where,$table){
		return $this->db->get_where($table,$where);
	}

			public function edit($data)
	{
		$this->db->where('id_data', $data['id_data']);
		$this->db->update('tb_data', $data);
	}


	    public function edit_detail($where,$data,$table){
    	$this->db->where($where);
    	$this->db->update($table,$data);
    	$this->db->set($table,$data);
    }

    	public function hapus_data($data)
	{
		$this->db->where('id_data', $data['id_data']);
		$this->db->delete('tb_data', $data);
	}

}