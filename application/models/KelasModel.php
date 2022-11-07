<?php

class Kelasmodel extends CI_Model
  {

    private $table = 'tabel_1901040018';

    public function getAll()
    {

        // Select table from * tabel_1901040018
        return $this->db->get($this->table)->result();
    }
    
}