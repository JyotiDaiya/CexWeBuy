<?php
class Cart_model extends CI_Model {

        public $product_id;
        public $orders_id;

        public function getCart()
        {
                $query = $this->db->get('cart');
                return $query->result();
        }

        public function insertBulkCart($products, $orders_id)
        {
                $data = array();
                foreach ($products as $productid) {
                        array_push($data, array(
                              'product_id' => $productid,
                              'orders_id' => $orders_id 
                        ));
                }  

                $this->db->insert_batch('cart', $data); 
        }

        public function getCartProducts($ids) {
            $this->db->select('*');
            $this->db->from('product');
            $this->db->where_in('id', $ids);
            $query = $this->db->get();
            return $query->result();
        }

        public function getCartByOrderId($orders_id) {
            $this->db->select('*');
            $this->db->from('cart');
            $this->db->where('orders_id', $orders_id);
            $query = $this->db->get();
            return $query->result();
        }

}