<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_tahfizh_quran extends CI_Controller {

	public function index(){
		$this->template->load('template', 'program_tahfizh_quran');
	}
	
	public function smp(){
		$this->template->load('template', 'program_tahfizh_quran_smp');
	}
	
	public function sma(){
		$this->template->load('template', 'program_tahfizh_quran_sma');
	}
	
	public function dauroh_quran_14_hari_hafal_2_juz(){
		$this->template->load('template', 'program_tahfizh_quran_14_hari_hafal_2_juz');
	}
}
