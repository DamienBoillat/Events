<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
	const TABLE = "Users";

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

}
