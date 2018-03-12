<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalaryAdd_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('SalaryAddModel');
		$datas = $this->SalaryAddModel->idemployee();
		$dataShowemp['idemployee'] = $datas;

    	$this->load->view('SalaryAdd',$dataShowemp);
	}

	public function getdataemp(){
		$this->load->model('SalaryAddModel');
		$this->SalaryAddModel->getdataemp();
		
		 redirect('Salary_controller');
	}
	
}
