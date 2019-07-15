<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller {

	public function index(){
		$this->template->load('template', 'visi_misi');
	}
}
