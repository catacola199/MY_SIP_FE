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
		$data=$this->m_barang->barang_list();
		echo json_encode($data);
	}

	function get_barang(){
		$kobar=$this->input->get('id');
		$data=$this->m_barang->get_barang_by_kode($kobar);
		echo json_encode($data);
	}

}