<?php

class FormCustomerModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function getdatacus(){
                $CUSID = $this->input->post('id');
                $CUSFNAME = $this->input->post('fname');
                $CUSLNAME = $this->input->post('lname');
                $CUSPHONE = $this->input->post('tel');
                $CUSEMAIL = $this->input->post('email');

            $query = $this->db->query("INSERT INTO customer (CUS_ID, CUS_FNAME, CUS_LNAME, CUS_PHONE, CUS_EMAIL)
                                       VALUES('$CUSID', '$CUSFNAME', '$CUSLNAME', '$CUSPHONE', '$CUSEMAIL')"); // session
                                      
        //     print_r($query);
        }
}