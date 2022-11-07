<?php

class Kelascontroller extends CI_Controller{

public function __construct()
{
  parent::__construct();
  $this->load->model('KelasModel');
}

  public function index()
  {
    $data['isi'] = $this->KelasModel->getALL();
    // var_dump($data);
    return $this->load->view('v_tabel', $data);
  }
}
