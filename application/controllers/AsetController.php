<?php

class AsetController extends CI_Controller{

public function __construct()
{
  parent::__construct();
  $this->load->model('AsetModel');
}

  public function index()
  {
    $data['jumlah'] = $this->AsetModel->getALL();
    // var_dump($data);
    return $this->load->view('v_aset', $data);
  }

  public function tambah ()
  {
      return $this->load->view('v_tambah');
  }

}
