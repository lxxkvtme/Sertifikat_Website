<?php
class Dashboard extends CI_Controller
{

   public function index()
   {
      $this->template->load('templates/template.php', 'dashboard/dashboard.php');
   }
}
