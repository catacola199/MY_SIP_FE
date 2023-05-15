<?php
class Barang extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
	}
	function index(){
		$this->load->view('v_barang');
	}

	function data_barang(){
		$data=$this->m_barang->getAlldata();
		echo json_encode($data);
	}

	function get_barang($id){
		// $id=$this->input->get('id');
		$data=$this->m_barang->get_by_id($id);
		echo json_encode($data);
	}

	function produk_terkait(){
		$data=$this->m_barang->barang_random();
		echo json_encode($data);
	}
// function barang(){
	// 	$id = $this->input->get('id');
	// 	return $this->db->get_where('produk_detail', ['id_detailproduk' => $id])->result();
	// }

	function filterProduk(){
		$kategori = $this->input->get('filter');
		if ($kategori){
			$data=$this->m_barang->filterBarang($kategori);
		}else{
			$data=$this->m_barang->getAlldata();
		}
		if($kategori == 'semua'){
			$data=$this->m_barang->getAlldata();
		}
		echo json_encode($data);
	}
	function kontak_pengguna() {
		$data = array(
			'nama_pengunjung'	        => $this->input->post('name'),
			'email_pengunjung'	    	=> $this->input->post('email'),
			'pesan_pengunjung'	    	=> $this->input->post('message')
		);
		$this->m_barang->simpanData($data);
    }
}