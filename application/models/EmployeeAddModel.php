<?php
class EmployeeAddModel extends CI_Model {
            
         public function __construct()
        {
            parent::__construct();
        }

        public function getdataemp(){

            $EMP_ID = $this->input->post('IDemp');
            $POSITION_POS_ID = $this->input->post('positionemp');
            $EMP_FNAME = $this->input->post('Fnameemp');
            $EMP_LNAME = $this->input->post('Lnameemp');
            $EMP_PHONE = $this->input->post('Telemp');
            $EMP_EMAIL = $this->input->post('Emailemp');
            $EMP_EDUCATION = $this->input->post('Educationemp');
            $EMP_GENDER = $this->input->post('genderemp');
            $EMP_SALARY = $this->input->post('salaryemp');
            $EMP_BIRTHDATE = $this->input->post('birthdayemp');
            $EMP_DATESTARTWORK = $this->input->post('dateemp');
            $EMP_ADDRESS = $this->input->post('addressemp');

            $query = $this->db->query("INSERT INTO employee (EMP_ID, POSITION_POS_ID, EMP_FNAME, EMP_LNAME, EMP_PHONE, EMP_EMAIL, 
                                                   EMP_EDUCATION, EMP_GENDER, EMP_SALARY, EMP_BIRTHDATE, EMP_DATESTARTWORK, EMP_ADDRESS)
                                       VALUES('$EMP_ID', '$POSITION_POS_ID', '$EMP_FNAME', '$EMP_LNAME', '$EMP_PHONE',
                                              '$EMP_EMAIL', '$EMP_EDUCATION', '$EMP_GENDER', '$EMP_SALARY', 
                                              '$EMP_BIRTHDATE', '$EMP_DATESTARTWORK', '$EMP_ADDRESS')"); // session               
        //     print_r($query);
        }

}