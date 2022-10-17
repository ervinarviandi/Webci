<?php

class home extends CI_Controller {

  public function rumah()
      {
      echo 'Rumah Ku';
      }


      public function tampil()
      {
        return $this->load->view('v_tampil');
      }
  }








