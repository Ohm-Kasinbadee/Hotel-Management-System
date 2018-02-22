<?php

class TimeTableModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function getdata(){
            $query = $this->db->query("SELECT  w.EMP_ID, e.EMP_FNAME, e.EMP_LNAME, w.WOR_DATEWORK, w.WOR_TIMEWORK , w.WOR_TIMEOUT,
                                               TIMEDIFF(  w.WOR_TIMEOUT , w.WOR_TIMEWORK ) AS test
                                        FROM working w NATURAL JOIN employee e"); // session
            return $query->result_array();
        }

    

}