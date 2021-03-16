<?php
class User_model extends CI_Model {

        public $name;
        public $address;
        public $email;
        public $mobileno;
        public $password;

        public function getUser()
        {
                $query = $this->db->get('product');
                return $query->result();
        }

        public function insertUser($data)
        {
                $this->name  = $data['name'];
                $this->address  = $data['address'];
                $this->email  = $data['email'];
                $this->mobileno  = $data['mobileno'];
                $this->password  = $data['password'];
                
                $this->db->insert('user', $this);
        }

        public function authenticate($data) {

                // password encryption ...
                $query = $this->db->get_where('user', array('email' => $data["email"], 'password' => $data["password"]));

                $returnUser = $query->row();

                $this->session->set_userdata('user', $returnUser);
                $this->session->set_userdata('cart', array());

                return $returnUser; 
        }

}