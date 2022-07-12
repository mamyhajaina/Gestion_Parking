<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ParkingController extends CI_Controller {

	public function loadmodel()
	{
		$this->load->model('Admin');
		$this->load->model('Parking');
	}

	public function statistique()
	{
		$this->load->view('Back/Statistique');
		
	}
	public function liste_Parking()
	{
		$this->loadmodel();
		$parking=$this->Parking->get_Parking();
		$data=array();
		$data['parking']=$parking;
		$this->load->view('Back/Liste_Parking',$data);
	}	
	
	public function todispo(){
		$idparking=$this->input->get('idparking');
		$this->loadmodel();
		$this->Parking->todispo($idparking);
		redirect('ParkingController/liste_Parking');
	}

	public function inserte_park(){
		$this->load->view('Back/Inserte_Parking');
	}

	public function ajout_parking(){
		$nombre=$this->input->post('nombre');
		$this->loadmodel();
		for($i=0;$i<$nombre;$i++){
			$this->Parking->inserte();
		}
		redirect('ParkingController/liste_Parking');
	}
}
