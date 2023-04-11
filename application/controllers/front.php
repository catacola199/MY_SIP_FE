<?php
class Front extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
	}
	function index(){
		$this->load->view('index');
	}
	function about(){
		$this->load->view('about');
	}
	function produk(){
		$this->load->view('product');
	}
	function kontak(){
		$this->load->view('contact');
	}
	function produk_details(){
		$this->load->view('product-details');
	}
	function details($id){
		$data=$this->m_barang->barang($id);
		echo json_encode($data);
	}

	// function barang(){
	// 	$id = $this->input->get('id');
	// 	return $this->db->get_where('produk_detail', ['id_detailproduk' => $id])->result();
	// }
}