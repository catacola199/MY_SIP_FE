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
		$data["IP"] = $this->m_barang->getdetailInformasiProduk();
		$this->load->view('product-details', $data);
	}
	function service_kalibrasi()
	{
		$this->load->view('service-kalibrasi');
	}
	function send_email()
	{
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'delvirovio@gmail.com',
			'smtp_pass' => 'Furqon1312#',
			'mailtype'  => 'html',
			'charset'   => 'iso-8859-1'
			
		);
		$this->load->library('email',$config);
		$this->email->initialize($config);

		$from_email = 'delvirovio@gmail.com';
		$to_email = $this->input->post('email');
		$this->email->from($from_email);
		$this->email->to($to_email);
		$this->email->subject('Test Subject');
		$this->email->message('Test Message');

		$this->email->send();
		$this->session->set_flashdata('email_send', 'Email berhasil dikirim');
		redirect(base_url('contact'));
		
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
