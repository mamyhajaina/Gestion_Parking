<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

	public function fonction()
	{
		$session = $this->session->userdata("admine");
		if ($session != null) {
		} else {
			$this->load->view('Front/login');
		}
	}


	public function loadmodel()
	{
		$this->load->model('Admin');
		$this->load->model('Utilisateur');
	}



	public function index()
	{
		$this->load->view('index');
	}
	public function login()
	{
		$this->loadmodel();
		$admine = $this->input->post('admine');
		$email = $this->input->post('email');
		$mtps = $this->input->post('mtps');
		if ($admine != null) {
			$value = $this->Admin->get_Admin($email, $mtps);
			if ($value->email != null) {
				$this->session->set_userdata("adminemail", $value->email);
				$this->session->set_userdata("adminenom", $value->nom);
				redirect('ParkingController/statistique');
			} else {
				redirect('LoginController/index');
			}
		} else {
			$Utilisateur = $this->Utilisateur->get_Utilisateur($email, $mtps);
			// var_dump("tsy mety");
			if ($Utilisateur->email != null) {
				$this->session->set_userdata("Utilisateur", $Utilisateur->email);
				$this->session->set_userdata("Utilisateurid", $Utilisateur->idutilisateur);
				redirect('Front/ParkingController/liste_Parking');
			} else {
				redirect('LoginController/index');
			}
		}
	}

	public function deconnecter()
	{
		unset($_SESSION['Utilisateur']);
		unset($_SESSION['adminemail']);
		unset($_SESSION['adminenom']);
		$this->session->sess_destroy();
		redirect('LoginController/index');
	}

	public function page_inscription()
	{
		$this->load->view('inscription');
	}

	public function inserte()
	{
		$this->loadmodel();
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$email = $this->input->post('email');
		$mtps = $this->input->post('mtps');
		$this->Utilisateur->create($nom, $prenom, $email, $mtps);
		redirect('LoginController/index');
	}
}
