<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {


	
	public function view($page = 'index'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
		
			
			
			$this->load->view('pages/'.$page);
			
		}
}
?>