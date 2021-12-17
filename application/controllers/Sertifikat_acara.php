<?php
class Sertifikat_acara extends CI_Controller
{

   function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
      $data['headline'] = 'Sertifikat Acara';
      $this->template->load('templates/template.php', 'menu/sertifikat_acara.php', $data);
   }
}
