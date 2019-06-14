<?php

class Payroll extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
        //$this->load->database();
        $this->load->helper('url');
        $this->load->model('PayrollModel', 'payroll');
    }

    public function index() {
        //check if the user is already logged in 
        //if yes redirect to the welcome page
        if ($this->session->userdata('logged_in')) {
            $this->load->view('main');
        }
        //load the register page views
        $this->load->view('movimiento');
    }

    public function getInfo()
    {
        $data['deudas'] = $this->payroll->seeInfo();
        $this->load->view('movimientos',$data);

        // for(var i = 0; i < count($data); i++)
        // {
        //     $name['name'] = $data[i]['fld_nombre'];
        //     $phone['phone'] = $data[i]['fld_telefono'];
        //     $email['email'] = $data[i]['fld_correo'];
        // }
    }

    public function createDebt()
    {
        $this->load->model('DebtModel', 'debt' );

            
        // $id = $this->input->post('idch');
        $amountDebt = $this->input->post('amountDebt');
        $concept = $this->input->post('concept');

        

        $data =
        [
            // 'fld_id_usuario' => $id,
            'fld_cantidad' => $amountDebt,
            'fld_concepto' => $concept
        ]; 

         foreach ($_POST['idch'] as $ides):
             $data['fld_id_usuario'] = $ides;
             $insert_data = $this->debt->putInfo($data);
         endforeach;

        

        if($insert_data){
            $data['mensaje']='Si se armo compa';
            $this->load->view('main', $data);
        }
    }

    public function pay()
    {
        $this->load->model('PayModel', 'pay');

        $id = $this->input->post('idPay');
        $amountPay = $this->input->post('amountPay');

        $data = [
            'fld_id_usuario' => $id,
            'fld_cantidad' => $amountPay
        ];

        $insert_data = $this->pay->putInfo($data);

        if($insert_data){
            $data['mensaje']='Si se armo compa';
            $this->load->view('main', $data);
        }
    }

}
