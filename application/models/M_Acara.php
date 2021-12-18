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

   public function deleteAcara($id_acara)
   {
      $this->db->where('id_acara', $id_acara);
      $this->db->delete('tb_acara');
   }


   public function editAcara($data, $id_acara)
   {
      $this->db->where('id_acara', $id_acara);
      $this->db->update('tb_acara', $data);
      return TRUE;
   }
}
