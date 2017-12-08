<?php
   
    class Contact_Model extends CI_Model{
       
        public function __construct(){
            $this->load->database();
        }

        public function contact($name, $email, $comments){

                $this->load->database();
                $contactinfo = Array('name'=>$name,'email'=>$email,'comments'=>$comments,);
                $this->db->insert('contact',$contactinfo);
    

            }
          
        }

    
?>