<?php

class Fungsi {
    protected $ci;

    public function __construct() {
        $this->ci =& get_instance();
        
    }

    function id_produk() {
        return $this->ci->input->get('id');
    }
   
} 