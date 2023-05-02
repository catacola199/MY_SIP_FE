<?php
class M_barang extends CI_Model
{

	public function barang_list()
	{
		return $this->db->get("produk_detail")->result();
	}

	public function getAlldata()
	{
		$this->db->select('`produk_detail`.`id_detailproduk`,`produk_detail`.`konten_id`,`produk_detail`.`nama_produk`, `produk_detail`.`informasi_produk`, `produk_detail`.`tagline_produk`, `produk_detail`.`kode_produk`,
        `produk_detail`.`feature_produk`, `produk_detail`.`file_produk`, `produk_detail_kategori`.`nama_kategori`,`produk_detail_gambar`.`gambar_produk`');
		$this->db->from('produk_detail');
		$this->db->join('produk_detail_kategori', 'produk_detail_kategori.konten_id = produk_detail.konten_id', 'left');
		$this->db->join('produk_detail_gambar', 'produk_detail_gambar.konten_id = produk_detail.konten_id', 'left');
		$this->db->group_by('`produk_detail`.`konten_id`');
		$query = $this->db->get();
		return  $query->result();
	}

	public function getdetailGambar()
	{
		$this->db->select('`produk_detail_gambar`.`gambar_produk`');
		$this->db->from('produk_detail');
		$this->db->join('produk_detail_gambar', 'produk_detail_gambar.konten_id = produk_detail.konten_id');
		$this->db->where('produk_detail.`id_detailproduk`',$this->input->get('id'));
		$query = $this->db->get();
		return  $query->result();
	}

	public function getdetailKategori()
	{
		$this->db->select('`produk_detail_kategori`.`nama_kategori`');
		$this->db->from('produk_detail');
		$this->db->join('produk_detail_kategori', 'produk_detail_kategori.konten_id = produk_detail.konten_id');
		$this->db->where('produk_detail.`id_detailproduk`',$this->input->get('id'));
		$query = $this->db->get();
		return  $query->result();
	}

	public function getdetailInformasiProduk()
	{
		$this->db->select('`produk_detail`.`informasi_produk`');
		$this->db->from('produk_detail');
		$this->db->where('produk_detail.`id_detailproduk`',$this->input->get('id'));
		$query = $this->db->get();
		return  $query->result();
	}


	function get_by_id($id)
	{
		return $this->db->get_where('produk_detail', ['id_detailproduk' => $id])->row();
		// $hsl=$this->db->query("SELECT * FROM produk_detail WHERE id_detailproduk='$id'");
		// if($hsl->num_row()>0){
		// 	foreach ($hsl->result() as $data) {
		// 		$hasil=array(
		// 			'nama_produk' 		=> $data->nama_produk,
		// 			'informasi_produk'	=> $data->informasi_produk,
		// 			'tagline_produk' 	=> $data->tagline_produk,
		// 			'kategori_produk' 	=> $data->kategori_produk,
		// 			'kode_produk' 		=> $data->kode_produk,
		// 			'feature_produk' 	=> $data->feature_produk,
		// 			'file_produk' 		=> $data->file_produk,
		// 			'gambar1_produk' 	=> $data->gambar1_produk,
		// 			'gambar2_produk' 	=> $data->gambar2_produk,
		// 			'gambar3_produk' 	=> $data->gambar3_produk,
		// 			'gambar4_produk' 	=> $data->gambar4_produk,
		// 			);
		// 	}
		// }
		// return $hasil;
	}

	function barang($id)
	{
		return $this->db->get_where('produk_detail', ['id_detailproduk' => $id])->row();
	}

	function barang_random()
	{
		$this->db->select('*');
		$this->db->from('produk_detail');
		$this->db->join('produk_detail_gambar', 'produk_detail_gambar.konten_id = produk_detail.konten_id');
		$this->db->order_by('rand()');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result();
	}
}
