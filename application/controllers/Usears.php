<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usears extends MY_Controller {

    public function index()
	{
		$this->load->view('welcome_message');
	}

}
