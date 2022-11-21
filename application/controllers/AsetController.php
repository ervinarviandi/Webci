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



  public function proses_tambah () 
  {
    $nama_aset = $this->input->post('txtnama_aset');
    $jenis = $this->input->post('txtjenis');
    $lokasi = $this->input->post('txtlokasi');
    $jumlah = $this->input->post('txtjumlah');


    $data_input = [
      // 'id' => $id,
      'nama_aset' => $nama_aset,
      'jenis' => $jenis,
      'lokasi' => $lokasi,
      'jumlah' => $jumlah
    ];

    $simpan = $this->AsetModel->add($data_input);
    redirect('Asetcontroller/index');
    // var_dump($data_input);

  }
}
