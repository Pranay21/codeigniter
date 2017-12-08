<?php
   
    class Subscribe_Model extends CI_Model{
       
        public function __construct(){
            $this->load->database();
        }

        public function client($name, $address, $phone,$email, $password){

                $this->load->database();
                $customer = Array('name'=>$name,'address'=>$address ,'phone'=>$phone, 'email'=>$email,'password'=>$password,);
                $this->db->insert('client',$customer);

            }

        
          
        }

    
?>