<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if($admin_id != null){
            redirect('super_admin','refresh');
        }
    }

    public function admin_login(){
        $this->load->view('admin/login');
    }




    public function check_login(){
        $admin_email_address=$this->input->post('admin_email_address', true);
        $admin_password=$this->input->post('admin_password', true);
        $result = $this->admin_model->check_login_info($admin_email_address,$admin_password);
        $sdata = array();
        if($result){
            $sdata['admin_name']=$result->admin_name;
            $sdata['admin_id']=$result->admin_id;
            $this->session->set_userdata($sdata);
            redirect('superadmin/dashboard');
        }else{
            $sdata['exception'] = 'User Id or Password is invalid';
            $this->session->set_userdata($sdata);
            redirect('admin/admin_login');
        }


    }


}
