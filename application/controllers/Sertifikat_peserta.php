<?php

class Sertifikat_peserta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['headline'] = 'Peserta Acara';
        $this->template->load('templates/template', 'menu/sertifikat_peserta', $data);
    }
}
