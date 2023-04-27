<?php
class Front extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_barang');
	}
	function index()
	{
		$this->load->view('index');
	}
	function about()
	{
		$this->load->view('about');
	}
	function produk()
	{
		$this->load->view('product');
	}
	function kontak()
	{
		$this->load->view('contact');
	}
	function produk_details()
	{
		$data["kategori"] = $this->m_barang->getdetailKategori();
		$data["konten"] = $this->m_barang->getdetailGambar();
		$this->load->view('product-details', $data);
	}
	function service_kalibrasi()
	{
		$this->load->view('service-kalibrasi');
	}
	function service_teknik()
	{
		$this->load->view('service-teknik');
	}
	function service_ukes()
	{
		$this->load->view('service-ukes');
	}
	function details($id)
	{
		$data = $this->m_barang->barang($id);
		echo json_encode($data);
	}

	// function barang(){
	// 	$id = $this->input->get('id');
	// 	return $this->db->get_where('produk_detail', ['id_detailproduk' => $id])->result();
	// }
}
