<?php
class EmployeeAddModel extends CI_Model {
            
         public function __construct()
        {
            parent::__construct();
        }

        // public function Add_data() {
        //     $id = $this->input->post('id');
        //     $fname = $this->input->post('first_name');
        //     $lname = $this->input->post('last_name');
        //     $tel = $this->input->post('tel');
        //     $email = $this->input->post('email');
        //     $Education = $this->input->post('Education');

        //     $data = array(
        //         'user_ID' => $username,
        //         'userPassword' => $password,
        //         'userType' => "R"
        //     );
        //     $this->db->insert('user', $data);

        //     $data2 = array(
        //         'user_ID' => $username,
        //         'ReaderFname' => $fname,
        //         'ReaderLname' => $lname,
        //         'ReaderGender' => $gender,
        //         'ReaderDateBirth' => date("Y-m-d", strtotime($birthday)),
        //         'ReaderTel' => $tel,
        //         'ReaderCash' => 0
        //     );
        //     $this->db->insert('reader', $data2);

        //     return true;          
        // }

}