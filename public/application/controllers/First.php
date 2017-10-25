<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {



	public function view($page = 'index'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}



			$this->load->view('pages/'.$page);

		}
		public function admin(){
			if(isset($_POST['username'])){
				if ($_POST['username']=='admin' && $_POST['password'] == 'admin@sbce'){
					$this->load->library('session');
					$user['username']=$_POST['username'];
					$this->load->view('pages/admin_home');
				}
			}else{
				$this->load->view('pages/index');
			}
		}
		public function createUser(){

		}
		public function logout(){
			$this->load->library('session');
			$this->session->unset_userdata('user');
			$this->load->view('pages/index');
		}
}
?>
