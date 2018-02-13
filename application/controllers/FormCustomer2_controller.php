<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormCustomer2_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('FormCustomer2Model');	
		$datas = $this->FormCustomer2Model->cus();
		$dataShow['room'] = $datas;

    	$this->load->view('FormCustomer2');
	}
	
	public function addroom(){
		
		$RES_ID = $this->input->post('id');
		$CUSTOMER_CUS_ID = $this->input->post('cusid');
		$RES_ROOMAMOUNT = $this->input->post('resroom');
		$PROMOTION_PRO_ID = $this->input->post('prores');
		$RES_DATERES = $this->input->post('resdate');
		$RES_DEPOSIT = $this->input->post('resdep');
		$RES_TOTALPRICE = $this->input->post('restotal');

		$this->load->model('FormCustomer2Model');
		$this->FormCustomer2Model->getdatares();
		$this->load->view('FormCustomer3');
	}

	function test(){
		echo "<script>alert(".isset($_POST['num']).");</script>";
	}

}
