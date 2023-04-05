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
}