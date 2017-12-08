<?php
   
    class Services_Model extends CI_Model{
        
        public function __construct(){
            $this->load->database();
        }

        public function services(){
    
         //   $this->load->database();
            /*$a="select * from service";
            $output=$this->db->query($a);
            $final=$output->result_array();
            return $final
            */

            $q = $this->db->get('service');
            return $q;
            }
          
        }

    
?>