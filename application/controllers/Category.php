<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('Category_model');
		if(!($this->session->userdata('admin'))) {
			redirect('Admin');
		}
	}

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$data = $this->Category_model->getCategory();
		$this->load->view('Category/list', array('list'=>$data));
	}

	public function add()
	{
		$this->load->helper('form');
		$this->load->view('Category/add');
	}

	public function submit()
	{
		$this->Category_model->insertCategory($this->input->post());
		$this->index();
	}
}
