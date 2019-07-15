<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('email');
	}

	public function index(){
		$this->template->load('template', 'contact');
	}
	
	function kirim_email(){
		$ci = get_instance();
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "dyanzzz@gmail.com";
        $config['smtp_pass'] = "s1apapunya";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        $ci->email->initialize($config);
 
        $ci->email->from('admin@gemail.com', 'Your Name');
        $list = array('dyanzzz@gmail.com');
        $ci->email->to($list);
        $ci->email->subject('judul email');
        $ci->email->message('isi email');
        if ($this->email->send()) {
            echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
	}
}
