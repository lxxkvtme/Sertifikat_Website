<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('M_Acara');
   }

   public function index()
   {
      $this->load->library('mypdf');

      $data['acara'] = $this->M_Acara->GetDataAcara();
      $this->mypdf->generate('menu/dompdf', $data, 'laporan-mahasiswa', 'A4', 'landscape');
   }
}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */