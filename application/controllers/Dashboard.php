<?php
class Dashboard extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
      $this->template->load('templates/template.php', 'dashboard/dashboard.php');
   }
}
