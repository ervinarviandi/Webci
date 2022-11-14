<?php

class Asetmodel extends CI_Model
  {

    private $table = 'tabel_aset';

    public function getAll()
    {

        // Select table from * tabel_1901040018
        return $this->db->get($this->table)->result();
    }
    
}