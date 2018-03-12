<?php
class SalaryAddModel extends CI_Model {
            
         public function __construct()
        {
            parent::__construct();
        }

        public function getdataemp(){

            $WOR_DATEWORK = $this->input->post('WOR_DATEWORK');
            $EMP_ID = $this->input->post('EMP_ID');
            $WOR_TIMEWORK = $this->input->post('WOR_TIMEWORK');
            $WOR_TIMEOUT = $this->input->post('WOR_TIMEOUT');
             //print_r($WOR_DATEWORK);
            $newDate = date("Y-m-d", strtotime($WOR_DATEWORK));
           // print_r($newDate);
            $query = $this->db->query("INSERT INTO working ( WOR_DATEWORK, EMP_ID, WOR_TIMEWORK, WOR_TIMEOUT)
                                       VALUES( '$newDate', '$EMP_ID', '$WOR_TIMEWORK', '$WOR_TIMEOUT')"); // session     
        }
        
        public function getdata(){
            $query = $this->db->query("SELECT  w.EMP_ID, e.EMP_FNAME, e.EMP_LNAME, w.WOR_DATEWORK, w.WOR_TIMEWORK , w.WOR_TIMEOUT,
                                               TIMEDIFF(  w.WOR_TIMEOUT , w.WOR_TIMEWORK ) AS test
                                        FROM employee e NATURAL JOIN working w"); // session
            return $query->result_array();
        }

}