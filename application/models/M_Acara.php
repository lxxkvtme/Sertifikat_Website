<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Acara extends CI_Model
{
   public function getDataAcara()
   {
      return $this->db->get('tb_acara')->result_array();
   }

   function addAcara($data)
   {
      $this->db->insert('tb_acara', $data);
      return TRUE;
   }
}
