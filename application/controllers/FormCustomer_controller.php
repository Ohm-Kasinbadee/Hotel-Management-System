<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormCustomer_controller extends CI_Controller {

	public function index()
	{
    	$this->load->view('FormCustomer');
	}


	public function addcustomer(){
		$this->load->model('FormCustomerModel');
		$this->FormCustomerModel->getdatacus();
		 $this->load->view('FormCustomer2');
	}
	

}
