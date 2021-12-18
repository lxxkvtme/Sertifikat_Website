<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Peserta extends CI_Model
{
   public function getPeserta()
   {
      return $this->db->get('tb_peserta')->result_array();
   }

   public function GetDataPeserta()
   {
      $this->db->select("*");
      $this->db->from('tb_peserta');
      $this->db->join('tb_acara', 'tb_acara.id_acara = tb_peserta.id_acara');
      return $this->db->get()->result_array();
   }
}
