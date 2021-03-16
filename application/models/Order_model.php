<?php
class Order_model extends CI_Model {

    public $userid;

    public function saveOrder()
    {
        if($this->session->has_userdata('user') ) {
            $this->userid = $this->session->userdata('user')->id;
            $this->db->insert('orders', $this);
            $orders_id = $this->db->insert_id();

            if($orders_id>0) {
                $cart = $this->session->userdata('cart');
                $this->load->model('Cart_model');
                $this->Cart_model->insertBulkCart($cart, $orders_id);
            }

            return true;    
        } else {
            return false;
        }
        
    }

    public function getOrders() {
        $query = $this->db->get('orders');
        return $query->result();
    }

    public function getOrderById() {
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
}