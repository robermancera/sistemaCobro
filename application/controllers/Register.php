<?php

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        //load the required helpers and libraries
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
        
        //load our Register model here
        $this->load->model('RegisterModel', 'register');
    }

    //registration form page
    public function index() {
        //check if the user is already logged in 
        //if yes redirect to the welcome page
        if ($this->session->userdata('logged_in')) {
            $this->load->view('main');
        }
        //load the register page views
        $this->load->view('page_register');
    }

    //register validation and logic
    public function doRegister() {
        //set the form validation here
        
        //if the above validation fails, redirect to register page
        //with vaildation_errors();
            //if not get the input values
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $password = $this->input->post('password');
            $propietario = '0';

            $data = 
            [
                'fld_nombre' => $name,
                'fld_telefono' => $phone,
                'fld_correo' => $email, 
                'fld_password' => $password, 
                'fld_propietario' => $propietario
            ];

            //pass the input values to the register model
            $insert_data = $this->register->add_user($data);

            //if data inserted then set the success message and redirect to login page
            if ($insert_data) {
                $this->session->set_flashdata('msg', 'Successfully Register, Login now!');
                $data['mensaje']='Si se armo compa';
                $this->load->view('main', $data);
            }
        
    }
}
