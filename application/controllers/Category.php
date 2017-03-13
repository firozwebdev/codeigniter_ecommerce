<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if($admin_id == null){
            redirect('admin/admin_login','refresh');
        }
    }

    public function add_category(){
        $data= array();
        $data['title'] = 'Add Category';
        $data['main_content'] = $this->load->view('admin/pages/category/add_category','',true);
        $this->load->view('admin/admin_layout',$data);
    }



    public function save_category(){
        $data=array();
        $data['category_name']= $this->input->post('category_name',true);
        $data['category_description']= $this->input->post('category_description',true);
        $data['category_publication_status']= $this->input->post('category_publication_status',true);
        $this->category_model->save_category_info($data);

        $sdata=array();
        $sdata['message']= "Save Category Information Successfully";
        $this->session->set_userdata($sdata);
        redirect('category/manage_category');

    }

    public function manage_category(){
        $data = array();
        $data['title']='Manage Category';
        $data['all_category']= $this->category_model->select_all_category_info();
        $data['main_content'] = $this->load->view('admin/pages/category/manage_category',$data,true);
        $this->load->view('admin/admin_layout',$data);
    }


    public function edit_category($category_id){
        $data=array();
        $data['title'] = 'Edit Category';
        $data['category_info']=$this->category_model->select_category_info_by_id($category_id);
        $data['main_content'] = $this->load->view('admin/pages/category/edit_category',$data,true);
        $this->load->view('admin/admin_layout',$data);

    }

    public function update_category(){
        $data = array();
        $data['category_id']=$this->input->post('category_id',true);
        $data['category_name']=$this->input->post('category_name',true);
        $data['category_description']=$this->input->post('category_description',true);
        $data['category_publication_status']=$this->input->post('category_publication_status',true);
        $this->category_model->update_category_info($data);

        $sdata= array();
        $sdata['message'] = 'Category Information has been updated.';
        $this->session->set_userdata($sdata);

        redirect('category/manage_category');
    }

    public function delete_category($category_id){
        $this->category_model->delete_category_by_id($category_id);
        $sdata= array();
        $sdata['message'] = 'Category Information has been Deleted.';
        $this->session->set_userdata($sdata);

        redirect('category/manage_category');
    }

    public function unpublished_category($category_id){
        $this->category_model->unpublished_category_by_id($category_id);
        $sdata= array();
        $sdata['message'] = 'Category has been Unpublished.';
        $this->session->set_userdata($sdata);

        redirect('category/manage_category');
    }
    public function published_category($category_id){
        $this->category_model->published_category_by_id($category_id);
        $sdata= array();
        $sdata['message'] = 'Category has been Published.';
        $this->session->set_userdata($sdata);

        redirect('category/manage_category');
    }

}
