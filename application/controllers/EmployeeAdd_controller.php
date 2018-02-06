<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeAdd_controller extends CI_Controller {

	public function index()
	{
    	$this->load->view('EmployeeAdd');
	}

	public function getdataemp(){
		$this->load->model('EmployeeAddModel');
		$this->EmployeeAddModel->getdataemp();
		 $this->load->view('EmployeeList');
	}
	
}
