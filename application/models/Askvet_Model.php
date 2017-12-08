<?php
   
    class Askvet_Model extends CI_Model{
       
        public function __construct(){
            $this->load->database();
        }

        public function ask(){

                 $q = $this->db->get('questions');
                return $q;
            }

    

    }
          
        

    
?>