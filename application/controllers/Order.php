<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Order_model');
		if(!($this->session->userdata('admin'))) {
			redirect('Admin');
		}
	}

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index() {

		$data = $this->Order_model->getOrders();
		$this->load->view('orders', array('list'=>$data));
	}

	public function details($orderid) {

		$this->load->model('Cart_model');
		$data = $this->Cart_model->getCartByOrderId($orderid);
		$this->load->view('Orders/details', array('list'=>$data));	
	}
}
