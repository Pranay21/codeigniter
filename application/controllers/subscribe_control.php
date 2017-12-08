<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subscribe_control extends CI_Controller {


		public function subscribe(){
			$this->load->view('hello');
			$this->load->model("Subscribe_Model");
			$name= $this->input->post('name');
			$address= $this->input->post('address');
			$phone= $this->input->post('phone');
			$email= $this->input->post('email');
			$password= $this->input->post('password');
			
			$this->Subscribe_Model->client($name, $address, $phone, $email, $password);		
				
		}
		// public function index(){
				
		// 		$this->load->helper('url');
		// 		$this->load->view('index');	
		// 		$this->load->view('hello');
		// 	}

		public function hello(){
			$this->load->view('hello');
			
			
		}

		public function validate(){

			$this->load->library('form_validation');
			$this->load->helper('security');
			$this->load->helper('array');
			
			$name= $this->input->post('name');
			$address= $this->input->post('address');
			$phone= $this->input->post('phone');
			$email= $this->input->post('email');
			$password= $this->input->post('password');
			$this->form_validation->set_rules('name','Client Name:','required');
			$this->form_validation->set_rules('address','Address:','required');
			$this->form_validation->set_rules('email','E-mail:','required|valid_email');
			$this->form_validation->set_rules('phone','Phone Number:','required|regex_match[/^[0-9]{10}$/]');
			$this->form_validation->set_rules('password','Password:','required|regex_match[/^\S*(?=\S{8,16})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/]');

				if ($this->form_validation->run() == TRUE)
			    {
			        //$this->load->view('subscribe');
			        $this->load->model("Subscribe_Model");
			        $this->Subscribe_Model->client($name, $address, $phone, $email, $password);
			        echo "Successfully Submitted";
			        
			    }
			    else
			    {
			        // load success template...
			        $this->load->view('subscribe');
			    }

		}




}

