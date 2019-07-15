<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur_organisasi extends CI_Controller {

	public function index(){
		$this->template->load('template', 'struktur_organisasi');
	}
}
