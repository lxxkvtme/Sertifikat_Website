<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Peserta extends CI_Model
{
   public function getDataPeserta()
   {
      return $this->db->get('tb_peserta')->result_array();
   }
}
