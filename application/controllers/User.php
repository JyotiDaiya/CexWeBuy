<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	}

	public function registration()
	{
		$this->load->helper('form');
		$this->load->view('User/register');
	}

	public function signup() {

		$this->load->model('User_model');

		//server side validation...

		$this->User_model->insertUser($this->input->post());

		//redirect to login with success message...

		redirect('/User/login');
	}

	public function login() {

		$this->load->helper('form');

		$this->load->view('User/login');

	}

	public function signin() {
		$this->load->model('User_model');
		$this->User_model->authenticate($this->input->post());
		redirect('/User/home');
	}

	public function home() {
		$this->load->view('User/home');		
	}

}