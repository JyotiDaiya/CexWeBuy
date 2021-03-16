<?php
class Category_model extends CI_Model {

        public $name;

        public function getCategory()
        {
                $query = $this->db->get('category');
                return $query->result();
        }

        public function insertCategory($data)
        {
                $this->name  = $data['categoryname'];
                
                $this->db->insert('category', $this);
        }

        public function update_entry($data)
        {
                $this->name  = $data['name'];

                $this->db->update('category', $this, array('id' => $data['id']));
        }

}