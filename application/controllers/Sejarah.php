<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	public function index(){
		$this->template->load('template', 'sejarah');
	}
}
