<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VoitureController extends CI_Controller
{

    public function loadmodel()
    {
        $this->load->model('Voiture');
    }

    public function voiture()
    {
        $this->load->view('Front/Voiture');
    }
}
