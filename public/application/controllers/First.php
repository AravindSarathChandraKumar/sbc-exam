<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {



	public function view($page = 'index'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}



			$this->load->view('pages/index');

		}
		public function admin(){
			$this->load->library('session');
			$using=$this->session->userdata('username');
			if($using == 'admin'){
				$this->load->view('pages/admin_home');
		}else{
			$this->load->view('pages/index');
		}
	}
		public function login(){
			if(isset($_POST['username'])){
					$data['username']=$_POST['username'];
					$data['password']=$_POST['password'];
					$result=$this->SBC->login($data);
					if ($_POST['username']=='admin' && $_POST['password'] == 'admin@sbce'){
						$this->load->library('session');
						$user['username']=$_POST['username'];
						$this->session->set_userdata[$user];
						$this->load->view('pages/admin_home');
					}elseif($result==true){
						$this->load->library('session');
						$user['username']=$_POST['username'];
						$this->session->set_userdata[$user];
						$this->load->view('pages/student_panel');

					}
					elseif($result==false){
						$this->load->view('pages/index');
					}
				}else{
					$this->load->view('pages/index');
		}
	}


		public function createUser(){
			$data['fname']=$_POST['fname'];
			$data['username']=$_POST['username'];
			$data['email']=$_POST['email'];
			$data['reg_id']=$_POST['regnum'];
			$data['password']=$_POST['password'];

			$this->db->insert('users',$data);
			$this->load->library('session');
			echo"<script>alert('User created')</script>";
			$this->load->view('pages/admin_home');


		}
		public function removeUser(){
			$data['regnum']=$_POST['regnum'];
			$data['email']=$_POST['email'];
			$result=$this->SBC->remove_user($data);
			if($result==true){
				echo"<script>alert('User Removed')</script>";
			}else{echo"<script>alert('Cannot remove User')</script>";}

			$this->load->library('session');
			$this->load->view('pages/admin_home');
		}
		public function logout(){
			$this->load->library('session');
			$this->session->unset_userdata('user');
			$this->load->view('pages/index');
		}
}
?>
