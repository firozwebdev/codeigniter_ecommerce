<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ecommerce extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == null) {
            redirect('admin/admin_login', 'refresh');
        }
    }

    public function eco_add_category(){
        $data = [];
        $data['title']= 'Dashboard';
        $data['main_content'] = $this->load->view('admin/ecommerce/category/add_category',$data,true);
        $this->load->view('admin/admin_layout',$data);
    }

    public function save_eco_category(){

    }
    public function eco_manage_category(){
        $data = array();
        $data['title']='Manage Category';
        $data['all_category']= $this->super_admin_model->select_all_category_info();
        $data['main_content'] = $this->load->view('admin/pages/category/manage_category',$data,true);
        $this->load->view('admin/admin_layout',$data);
    }
    public function eco_add_product(){

    }
    public function eco_manage_product(){

    }
}