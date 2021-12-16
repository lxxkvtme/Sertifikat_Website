<?php
class Sertfikat_acara extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
      $this->template->load('templates/template.php', 'menu/setifikat_acara.php');
   }
}
