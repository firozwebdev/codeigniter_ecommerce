<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if($admin_id == null){
            redirect('admin/admin_login','refresh');
        }
    }

    public function add_brand()
    {
        $data= array();
        $data['title'] = 'Add Brand';
        $data['main_content'] = $this->load->view('admin/pages/brand/add_brand','',true);
        $this->load->view('admin/admin_layout',$data);
    }

    public function save_brand(){
        $data=array();
        $data['brand_name']= $this->input->post('brand_name',true);
        $data['brand_description']= $this->input->post('brand_description',true);
        $data['brand_publication_status']= $this->input->post('brand_publication_status',true);
        $this->brand_model->save_brand_info($data);

        $sdata=array();
        $sdata['message']= "Save Brand Information Successfully";
        $this->session->set_userdata($sdata);
        redirect('brand/manage_brand');

    }

    public function manage_brand(){
        $data = array();
        $data['title']='Manage Brand';
        $data['all_brand']= $this->brand_model->select_all_brand_info();
        $data['main_content'] = $this->load->view('admin/pages/brand/manage_brand',$data,true);
        $this->load->view('admin/admin_layout',$data);
    }

    public function edit_brand($brand_id){
        $data=array();
        $data['title'] = 'Edit brand';
        $data['brand_info']=$this->brand_model->select_brand_info_by_id($brand_id);
        $data['main_content'] = $this->load->view('admin/pages/brand/edit_brand',$data,true);
        $this->load->view('admin/admin_layout',$data);

    }

    public function update_brand(){
        $data = array();
        $data['brand_id']=$this->input->post('brand_id',true);
        $data['brand_name']=$this->input->post('brand_name',true);
        $data['brand_description']=$this->input->post('brand_description',true);
        $data['brand_publication_status']=$this->input->post('brand_publication_status',true);
        $this->brand_model->update_brand_info($data);

        $sdata= array();
        $sdata['message'] = 'brand Information has been updated.';
        $this->session->set_userdata($sdata);

        redirect('brand/manage_brand');
    }

    public function delete_brand($brand_id){
        $this->brand_model->delete_brand_by_id($brand_id);
        $sdata= array();
        $sdata['message'] = 'brand Information has been Deleted.';
        $this->session->set_userdata($sdata);

        redirect('brand/manage_brand');
    }

    public function unpublished_brand($brand_id){
        $this->brand_model->unpublished_brand_by_id($brand_id);
        $sdata= array();
        $sdata['message'] = 'brand has been Unpublished.';
        $this->session->set_userdata($sdata);

        redirect('brand/manage_brand');
    }
    public function published_brand($brand_id){
        $this->brand_model->published_brand_by_id($brand_id);
        $sdata= array();
        $sdata['message'] = 'brand has been Published.';
        $this->session->set_userdata($sdata);

        redirect('brand/manage_brand');
    }


}
