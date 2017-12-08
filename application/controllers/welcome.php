<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	/*
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 


		public function index(){
				
				$this->load->helper('url');
				$this->load->library('form_validation');
				$this->load->view('index');

			}

		

		public function register(){
			$this->load->view('Contact');
			$name= $this->input->post('name');
			$email= $this->input->post('email');
			$comments= $this->input->post('comments');
			$this->load->model("Contact_Model");
			$this->Contact_Model->contact($name, $email, $comments);

		}

		public function services(){
		
		$this->load->helper('url');
		//$this->load->view('services');
		$this->load->model("Services_Model");
				$data['type']= $this->Services_Model->services();
				$this->load->view('services',$data);



				
		}

		public function servicetype(){
			/*$data['type']=array();
			$this->load->model("Services_Model");
			//$this->Services_Model->services();	
			$data['type']= $this->Services_Model->services();
			$this->load->view('services', $data);
				*/
							$this->load->model("Services_Model");
				$data['type']= $this->Services_Model->services();
				$this->load->view('services',$data);	
		}

		//public function ask(){
			// $askvet= $this->input->post('services');	
			// $this->load->model("Askvet_Model");
			// $this->Askvet_Model->ask($askvet);	



		// 	$askvet= $this->input->post('services');
		// $this->load->view('askvet');	
		// $this->load->helper('url');
		// $this->load->model("Askvet_Model");
		// 		$data['type']= $this->Askvet_Model->ask($askvet);
		// 		$this->load->view('askvet',$data);	
				
		//}

		public function askvet(){
		$this->load->helper('url');
		//$this->load->view('services');
		$this->load->model("Askvet_Model");
				$data['type']= $this->Askvet_Model->ask();
				$this->load->view('askvet',$data);
	
				
		}
		

		public function sub(){
			$this->load->view('sub');
			$name= $this->input->post('name');
			$address= $this->input->post('address');
			$phone= $this->input->post('phone');
			$email= $this->input->post('email');
			$password= $this->input->post('password');
			$this->load->model("Subscribe_Model");
			$this->Subscribe_Model->client($name, $address, $phone, $email, $password);		
				
		}


		public function contact(){
		$this->load->view('Contact');		
				
		}

		public function validateform(){

			$this->load->library('form_validation');
			$this->load->helper('security');
			$this->load->helper('array');

			
			$name= $this->input->post('name');
			$email= $this->input->post('email');
			$comments= $this->input->post('comments');
			$this->form_validation->set_rules('name','Client Name:','required');
			$this->form_validation->set_rules('email','E-mail:','required|valid_email');
			

				if ($this->form_validation->run() == TRUE)
			    {
			        //$this->load->view('subscribe');
			        $this->load->model("Contact_Model");

					$this->Contact_Model->contact($name, $email, $comments);
			        echo "Successfully Submitted";
			        
			    }
			    else
			    {
			        // load success template...
			        $this->load->view('Contact2');
			        
			    }
		}
	 
	
}


?>