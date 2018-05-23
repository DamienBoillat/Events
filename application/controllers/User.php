<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		// Charger lib session
		$this->load->library('session');
		
		$this->load->model('user_model');
	}
	
	public function index()
	{
		// Charge le contenu de la page
		$this->load->view('pages/user/index');
	}
}
