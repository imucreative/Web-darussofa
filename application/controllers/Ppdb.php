<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {

	public function index(){
		$this->template->load('template', 'ppdb');
	}
}
