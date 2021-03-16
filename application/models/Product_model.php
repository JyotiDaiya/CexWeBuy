<?php
class Product_model extends CI_Model {

        public $title;
        public $description;
        public $category_id;
        public $image;
        public $price;

        public function getProducts()
        {
                $query = $this->db->get('product');
                return $query->result();
        }

        public function insertProduct($data)
        {
                $this->title  = $data['title'];
                $this->description  = $data['description'];
                $this->category_id  = $data['category_id'];
                $this->image  = $data['image'];
                $this->price  = $data['price'];
                
                $this->db->insert('product', $this);
        }

        public function getCartProducts($ids) {
                $this->db->select('*');
                $this->db->from('product');
                $this->db->where_in('id', $ids);
                $query = $this->db->get();
                return $query->result();
        }

}