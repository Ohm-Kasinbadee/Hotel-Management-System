<?php

class leavingModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function getdata(){
            $query = $this->db->query("SELECT e.EMP_ID, e.EMP_FNAME ,e.EMP_LNAME , l.TYL_NAME, l.LEA_DATESTART, l.LEA_DATEEND, l.LEA_ETC
                                        FROM leaving l NATURAL JOIN employee e"); // session
            return $query->result_array();
        }

}