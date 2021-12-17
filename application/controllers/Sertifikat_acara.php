<?php
class Sertifikat_acara extends CI_Controller
{

   function __construct()
   {
      parent::__construct();
      $this->load->model('M_Acara');
      $this->load->model('M_Peserta');
   }

   public function index()
   {
      $data['headline'] = 'Sertifikat Acara';
      $data['acara'] = $this->M_Acara->GetDataAcara();
      $data['peserta'] = $this->M_Peserta->GetDataPeserta();

      $this->template->load('templates/template.php', 'menu/sertifikat_acara.php', $data);
   }

   public function addAcara()
   {

      $this->form_validation->set_rules('nama_acara', 'Nama Acara', 'required');
      $this->form_validation->set_rules('tema_acara', 'Tema Acara', 'required');
      $this->form_validation->set_rules('tanggal_acara', 'Tanggal Acara', 'required');
      $this->form_validation->set_rules('tempat_acara', 'Tempat Acara', 'required');
      $this->form_validation->set_rules('narasumber_acara_1', 'Narasumber 1', 'required');
      $this->form_validation->set_rules('narasumber_acara_2', 'Narasumber 2', 'required');
      $this->form_validation->set_rules('narasumber_acara_3', 'Narasumber 3', 'required');

      if ($this->form_validation->run() == FALSE) {
         // $this->session->set_flashdata('flash', 'Gagal Ditambahkan');
         redirect('Sertifikat_acara/index');
      } else {
         $nama_acara = $this->input->post('nama_acara', true);
         $tema_acara = $this->input->post('tema_acara', true);
         $tanggal_acara = $this->input->post('tanggal_acara', true);
         $tempat_acara = $this->input->post('tempat_acara', true);
         $narasumber_acara_1 = $this->input->post('narasumber_acara_1', true);
         $narasumber_acara_2 = $this->input->post('narasumber_acara_2', true);
         $narasumber_acara_3 = $this->input->post('narasumber_acara_3', true);

         $data = [
            'nama_acara' => $nama_acara,
            'tema_acara' => $tema_acara,
            'tanggal_acara' => $tanggal_acara,
            'tempat_acara' => $tempat_acara,
            'narasumber_acara_1' => $narasumber_acara_1,
            'narasumber_acara_2' => $narasumber_acara_2,
            'narasumber_acara_3' => $narasumber_acara_3
         ];

         $this->M_Acara->addAcara($data);
         // $this->session->set_flashdata('flash', 'Ditambahkan');
         redirect('Sertifikat_acara/index');
      }
   }
}
