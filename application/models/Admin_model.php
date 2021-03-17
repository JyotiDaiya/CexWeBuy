<?php
class Admin_model extends CI_Model {

        public function authenticate($data) {

                // password encryption ...
                $query = $this->db->get_where('admin', array('username' => $data["username"], 'password' => $data["password"]));

                $returnAdmin = $query->row();

                $this->session->set_userdata('admin', $returnAdmin);

                
                return $returnAdmin; 
        }

}