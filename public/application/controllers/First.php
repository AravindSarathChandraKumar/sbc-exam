<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {



	public function view($page = 'index'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
				$data['questions']=$this->SBC->fetchQuestions();
			$this->load->view('pages/'.$page,$data);

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
		public function signup(){
			$data['fname']=$_POST['fname'];
			$data['username']=$_POST['username'];
			$data['email']=$_POST['email'];
			$data['reg_id']=$_POST['regnum'];
			$data['password']=$_POST['password'];
			$data['hash']=bin2hex(openssl_random_pseudo_bytes(3));
			$this->db->insert('tempuser',$data);
			$this->load->library('session');

			$config = Array(
		     'protocol' => 'smtp',
		     'smtp_host' => 'smtp.sendgrid.net',
		     'smtp_port' => 587,
		     'smtp_user' => 'apikey', // change it to yours
		     'smtp_pass' => '#', // change it to yours
		     'mailtype' => 'html',
		     'charset' => 'iso-8859-1',
		     'wordwrap' => TRUE,
				 'newline' => '\n'
  		);
		$email=$_POST['email'];
	  $this->load->library('email', $config);
    $this->email->set_newline('\n');
    $this->email->from('adityavadityav@gmail.com', "Admin Team");
    $this->email->to($email);
    $this->email->subject("Email Verification");
	  $this->email->message("Dear User,<br><br> Please  paste into your PIN to verify your Email Address <br>One Time Pin :- <b>".$data['hash']."</b><br><br><br>Thanks,<br>Admin Team");
	  $this->email->send();

		$this->load->view('pages/verification');


		}
		public function createQuestion(){
			$datas['Title']=$_POST['title'];
			$datas['noQstn']=$_POST['noQstn'];
			$datas['Author']=$_POST['author'];
			$datas['semester']=$_POST['semester'];

			$datas['QstnIds']=$datas['semester'].$_POST['QstnId'];
			$value=$this->SBC->createQstn($datas);
			if($value){
				echo '<h1 style ="text-align:center;color:red">Question Paper Created...!Kindly close this window</h1>';
			}
		}
		public function listUser(){
			$data['sem']=$_POST['sem'];
			 $data['result']=$this->SBC->listUsers($data);

			 $this->load->view('pages/userlist',$data);
			//print_r($result);
		}
		public function removeUser(){
			$data['regnum']=$_POST['regnum'];
			$data['email']=$_POST['email'];
			$result=$this->SBC->remove_user($data);
			if($result==true){
				echo"<script>alert('User Removed')</script>";
			}else{echo"<script>alert('No such User')</script>";}
			$this->load->library('session');
			$this->load->view('pages/admin_home');
		}

		public function verify(){
			$data['hash']=$_POST['hash'];
			$result=$this->SBC->verifyUser($data);
			if($result == false){
				echo"<script>Verification Failed:Check email</script>";
				$this->load->view('pages/verification');
			}elseif($result == true){

			echo"<script>alert('Account created.Please click OK');</script>";
			$this->load->view('pages/index');
			}
		}
		public function removeQuestion(){

			if ($_POST['qstnId']!==''){
				$status=$this->SBC->removeQstn($_POST['qstnId']);
				If ($status){
					$this->load->library('session');
					$data['questions']=$this->SBC->fetchQuestions();
					$this->load->view('pages/admin_exam',$data);

				}
			}
		}
	public function addQstn(){
		$this->load->helper('url');
		$datas['QstnId']=$this->uri->segment(3);
		$datas['noQstn']=$this->uri->segment(4);
		for($i=1;$i<$datas['noQstn'];$i++){
				$data = array(
    			'index'=>$i,);
				$this->load->view('pages/editQstn',$data);
		}

	}
	public function insertQuestion(){
		$this->load->helper('url');
		$QstnId=$this->uri->segment(3);
		$data['Id']=$_POST['question_no'];
		$data['Question']=$_POST['question'];
		$data['Option1']=$_POST['op1'];
		$data['Option2']=$_POST['op2'];
		$data['Option3']=$_POST['op3'];
		$data['Option4']=$_POST['op4'];
		$data['answer']=$_POST['ans'];

		$this->db->insert($QstnId,$data);
	}
		public function logout(){
			$this->load->library('session');
			$this->session->unset_userdata('user');
			$this->load->view('pages/index');
		}
}
?>
