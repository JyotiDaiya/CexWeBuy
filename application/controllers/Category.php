<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

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
	public function index()
	{
		$this->load->model('Category_model');
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
		$this->load->model('Category_model');
		$this->Category_model->insertCategory($this->input->post());
		$this->index();
	}
}
