<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        
        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        
        //load the Login Model
        $this->load->model('LoginModel', 'login');
    }
 
    public function index() {
        //check if the user is already logged in 
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in){
            //if yes redirect to welcome page
            redirect(base_url().'welcome');
        }
        //if not load the login page
        $this->load->view('login');
    }
 
    public function doLogin() {
        //die(var_dump($_POST['phone']));
        //get the input fields from login form
        $phone = $this->input->post('phone');
        $password = $this->input->post('password');
        
        //send the email pass to query if the user is present or not
        $check_login = $this->login->checkLogin($phone, $password);
 
        //if the result is query result is 1 then valid user
        if ($check_login) {
            //if yes then set the session 'loggin_in' as true
            $this->session->set_userdata('logged_in', true);
            redirect(base_url().'welcome');
        } else {
            //if no then set the session 'logged_in' as false
            $this->session->set_userdata('logged_in', false);
            
            //and redirect to login page with flashdata invalid msg
            $this->session->set_flashdata('msg', 'Username / Password Invalid');
            redirect(base_url().'login');            
        }
    }
 
    // public function logout() {
    //     //unset the logged_in session and redirect to login page
    //     $this->session->unset_userdata('logged_in');
    //     redirect(base_url().'login');
    // }
 
}