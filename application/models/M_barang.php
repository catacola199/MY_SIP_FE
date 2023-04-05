<?php
class M_barang extends CI_Model{

	function barang_list(){
		$hasil=$this->db->query("SELECT * FROM produk_detail");
		return $hasil->result();
	}

	function get_barang_by_kode($kobar){
		$hsl=$this->db->query("SELECT * FROM produk_detail WHERE id_detailproduk='$kobar'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nama_produk' 		=> $data->nama_produk,
					'informasi_produk'	=> $data->informasi_produk,
					'tagline_produk' 	=> $data->tagline_produk,
					'kategori_produk' 	=> $data->kategori_produk,
					'kode_produk' 		=> $data->kode_produk,
					'feature_produk' 	=> $data->feature_produk,
					'file_produk' 		=> $data->file_produk,
					'gambar1_produk' 	=> $data->gambar1_produk,
					'gambar2_produk' 	=> $data->gambar2_produk,
					'gambar3_produk' 	=> $data->gambar3_produk,
					'gambar4_produk' 	=> $data->gambar4_produk,
					);
			}
		}
		return $hasil;
	}
}