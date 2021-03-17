<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	/**
	 * Controller for this controller.
	 * 
	 */
	public function __construct() {
		parent::__construct();
		$this->load->model('Product_model');
		if(!($this->session->userdata('admin'))) {
			redirect('Admin');
		}
	}

	/**
	 * Index Page for this controller.
	 * 
	 */
	public function index()
	{
		$data = $this->Product_model->getProducts();
		$this->load->view('Product/list', array('list'=>$data));
	}

	public function add()
	{
		$this->load->model('Category_model');
		$categoryData = $this->Category_model->getCategory();
		
		$this->load->helper('form');
		$this->load->view('Product/add', array('categoryData'=>$categoryData));
	}

	public function submit()
	{
		$this->Product_model->insertProduct($this->input->post());
		redirect('/Product');
	}

}
