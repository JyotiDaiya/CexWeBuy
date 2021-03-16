<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */




	public function index() {
		$cart = $this->session->userdata('cart');
		if(count($cart)>0) {
			$this->load->model('Product_model');
			$data = $this->Product_model->getCartProducts($this->session->userdata('cart'));
			echo '<a href="'. base_url().'/Cart/products">Back To Products</a>';
			$this->load->view('Cart/list', array('list'=>$data));	
		} else {
			$this->load->view('Cart/list', array('list'=>array()));
		}

		
	}

	public function products()
	{
		$this->load->model('Product_model');
		$data = $this->Product_model->getProducts();
		$this->load->view('Cart/productlist', array('list'=>$data));
	}

	public function addToCart($productid)
	{
		if($this->session->has_userdata('cart')) {
			$cart = $this->session->userdata('cart');
			array_push($cart, $productid);
			$cart = array_unique($cart);
			$this->session->set_userdata('cart', $cart);
		} else {
			$this->session->set_userdata('cart', array($productid));
		}

		redirect('/Cart');
	}

	public function removeFromCart($productid) {

		if($this->session->has_userdata('cart')) {
			$cart = $this->session->userdata('cart');
			if (($key = array_search($productid, $cart)) !== false) {
				unset($cart[$key]);
			}
			$this->session->set_userdata('cart', $cart);
		}
		redirect('/Cart');
	}

	public function placeOrder() {

		$this->load->model('Order_model');
		$ret = $this->Order_model->saveOrder();
		if(!$ret) {
			redirect('User/login');
		} else {
			$this->session->unset_userdata('cart');
			redirect('User/home');
		}
	}

}