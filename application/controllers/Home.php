<?php

class Home Extends CI_Controller{

	public function index () {

		$this->load->view('welcome_message');
	}
}