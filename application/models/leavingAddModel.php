<?php
class leavingAddModel extends CI_Model {
            
         public function __construct()
        {
            parent::__construct();
        }

        public function getdataemp(){

            $TYL_ID = $this->input->post('TYL_NAME');
            $EMP_ID = $this->input->post('EMP_ID');
            $LEA_AMOUNTDAY = $this->input->post('LEA_AMOUNTDAY');
            $DAY = $this->input->post('DAY');
            $LEA_DAY = explode(" ",$DAY);
            $newstart = date("Y-m-d", strtotime($LEA_DAY[0]));
            $newend = date("Y-m-d", strtotime($LEA_DAY[2]));
            $LEA_ETC = $this->input->post('LEA_ETC');

            $query = $this->db->query("INSERT INTO leaving ( TYL_NAME, EMP_ID, LEA_AMOUNTDAY, LEA_DATESTART, LEA_DATEEND, LEA_ETC )
                                       VALUES( '$TYL_ID', '$EMP_ID', '$LEA_AMOUNTDAY', '$newstart', '$newend', '$LEA_ETC')"); // session               
        }

        public function idemployee(){
            $query = $this->db->query("SELECT * FROM  employee"); // session
            return $query->result_array();
        }

}