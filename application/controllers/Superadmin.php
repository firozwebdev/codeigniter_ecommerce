<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if($admin_id == null){
            redirect('admin/admin_login','refresh');
        }

        $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
            'id'=>'ck_editor',
            'path'=>'assets/back/js/ckeditor',

        );
    }

    public function dashboard(){
        $data = [];
        $data['title']= 'Dashboard';
        $data['main_content'] = $this->load->view('admin/pages/dashboard',$data,true);
        $this->load->view('admin/admin_layout',$data);
    }

    //The below code is for insert, update and delete category



    //post part function (create, read, update, and delete)

    public function add_post(){
        $data= array();
        $data['editor']= $this->data;
        $data['all_category']= $this->super_admin_model->select_all_category_info();
        $data['title'] = 'Add Post';
        $data['main_content'] = $this->load->view('admin/pages/post/add_post',$data,true);
        $this->load->view('admin/admin_layout',$data);
    }

    public function add_product(){
        $data= array();
        $data['editor']= $this->data;
        $data['all_category']= $this->super_admin_model->select_all_category_info();
        $data['title'] = 'Add Product';
        $data['main_content'] = $this->load->view('admin/pages/product/add_product',$data,true);
        $this->load->view('admin/admin_layout',$data);
    }

    public function save_post(){
        $data=array();
        $data['post_title']=$this->input->post('post_title',true);
        $data['category_id']= $this->input->post('category_id',true);
        $data['post_short_description']= $this->input->post('post_short_description',true);
        $data['post_long_description']= $this->input->post('post_long_description',true);
        $data['post_status']= $this->input->post('post_status',true);
        $data['post_author']=$this->input->post('post_author',true);
        $data['post_author_email']=$this->input->post('post_author_email',true);



        /*
         * Start Image Upload
         */



        $config['upload_path'] = 'assets/back/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '5000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        //$error='';
        //$fdata=array();




        $this->upload->initialize($config);


        if($this->upload->do_upload('post_image')){
            $uploadData = $this->upload->data();
            $image_name = $uploadData['file_name'];
        }else{
            $picture = '';
        }

        $data['post_image']= $config['upload_path'].$image_name;
        $this->super_admin_model->save_post_info($data);


        $sdata=array();
        $sdata['message']= "Save Post Information Successfully";
        $this->session->set_userdata($sdata);
        redirect('superadmin/manage_post');

    }


    public function manage_post(){
        $data = array();
        $data['title']='Manage Post';
        $data['all_post']= $this->super_admin_model->select_all_post_info();
        $data['main_content'] = $this->load->view('admin/pages/post/manage_post',$data,true);
        $this->load->view('admin/admin_layout',$data);
    }

    public function unpublished_post($post_id){
        $this->super_admin_model->unpublished_post_by_id($post_id);

        $sdata=array();
        $sdata['message']= "Post has been Unpublished";
        $this->session->set_userdata($sdata);
        redirect('superadmin/manage_post');
    }
    public function published_post($post_id){
        $this->super_admin_model->published_post_by_id($post_id);

        $sdata=array();
        $sdata['message']= "Post has been Published";
        $this->session->set_userdata($sdata);
        redirect('superadmin/manage_post');
    }


    public function edit_post($post_id){
        $data=array();
        $data['title'] = 'Edit Post';
        $data['editor']= $this->data;
        $data['all_published_category']=$this->super_admin_model->select_all_published_category();
        $data['post_info']=$this->super_admin_model->select_post_info_by_id($post_id);
        $data['main_content'] = $this->load->view('admin/pages/post/edit_post',$data,true);
        $this->load->view('admin/admin_layout',$data);

    }

    public function update_post(){

        if( ! $_FILES['post_image']['tmp_name']) {
            $data = array();
            $data['post_id'] = $this->input->post('post_id', true);


            $data['post_title'] = $this->input->post('post_title', true);
            $data['category_id'] = $this->input->post('category_id', true);
            $data['post_short_description'] = $this->input->post('post_short_description', true);
            $data['post_long_description'] = $this->input->post('post_long_description', true);

            $data['post_status'] = $this->input->post('post_status', true);
            $data['post_author'] = $this->input->post('post_author', true);
            $data['post_author_email'] = $this->input->post('post_author_email', true);
            $this->super_admin_model->update_post_without_image($data);



        }else{
            $data = array();
            $data['post_id'] = $this->input->post('post_id', true);


            $data['post_title'] = $this->input->post('post_title', true);
            $data['category_id'] = $this->input->post('category_id', true);
            $data['post_short_description'] = $this->input->post('post_short_description', true);
            $data['post_long_description'] = $this->input->post('post_long_description', true);

            $data['post_status'] = $this->input->post('post_status', true);
            $data['post_author'] = $this->input->post('post_author', true);
            $data['post_author_email'] = $this->input->post('post_author_email', true);


            $config['upload_path'] = 'assets/back/images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '5000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

            $this->upload->initialize($config);

            if($this->upload->do_upload('post_image')){
                $uploadData = $this->upload->data();
                $image_name = $uploadData['file_name'];
            }else{
                $picture = '';
            }

            $data['post_image']= $config['upload_path'].$image_name;
            $this->super_admin_model->update_post_with_image($data);
        }


        $sdata=array();
        $sdata['message']= "Post Informaition has been updated successfully !";
        $this->session->set_userdata($sdata);
        redirect('superadmin/manage_post');

    }

    public function delete_post($post_id){
        $this->super_admin_model->delete_post_by_id($post_id);

        $sdata=array();
        $sdata['message']= "Post has been Deleted";
        $this->session->set_userdata($sdata);
        redirect('superadmin/manage_post');
    }


    //This part is for comment(create, read, update and delete)
    public function manage_comment(){
        $data = array();
        $data['title']='Manage Comment';
        $data['all_comment']= $this->super_admin_model->select_all_comment_info();
        $data['main_content'] = $this->load->view('admin/pages/post/manage_comment',$data,true);
        $this->load->view('admin/admin_layout',$data);
    }

    public function unpublished_comment($comment_id){
        $this->super_admin_model->unpublished_comment_by_id($comment_id);

        $sdata=array();
        $sdata['message']= "Comment has been Unpublished";
        $this->session->set_userdata($sdata);
        redirect('superadmin/manage_comment');
    }

    public function published_comment($comment_id){
        $this->super_admin_model->published_comment_by_id($comment_id);

        $sdata=array();
        $sdata['message']= "Comment has been Published";
        $this->session->set_userdata($sdata);
        redirect('superadmin/manage_comment');
    }

    public function delete_comment($comment_id){
        $this->super_admin_model->delete_comment_by_id($comment_id);
        $sdata= array();
        $sdata['message'] = 'Comment has been Deleted.';
        $this->session->set_userdata($sdata);

        redirect('superadmin/manage_comment');
    }

    public function show_comment($comment_id){
        $data=array();
        $data['title'] = 'Show Comment';

        $data['comment_info']=$this->super_admin_model->select_comment_info_by_id($comment_id);
        $data['main_content'] = $this->load->view('admin/pages/post/show_comment',$data,true);
        $this->load->view('admin/admin_layout',$data);

    }
    public function make_unpublish_comment($comment_id){
        $this->super_admin_model->unpublished_comment_by_id($comment_id);

        $sdata=array();
        $sdata['message']= "Comment has been Unpublished";
        $this->session->set_userdata($sdata);
        redirect('superadmin/show_comment/'.$comment_id);
    }
    public function make_publish_comment($comment_id){
        $this->super_admin_model->published_comment_by_id($comment_id);

        $sdata=array();
        $sdata['message']= "Comment has been Published";
        $this->session->set_userdata($sdata);
        redirect('superadmin/show_comment/'.$comment_id);
    }

    //user part
    public function manage_user(){
        $data= [];
        $data['title']='Manage Users';
        $data['all_user'] = $this->super_admin_model->select_all_user_info();
        $data['main_content'] = $this->load->view('admin/pages/post/manage_user',$data,true);
        $this->load->view('admin/admin_layout',$data);

    }

    public function block_user($user_id){
        $this->super_admin_model->block_user_by_id($user_id);

        $sdata=array();
        $sdata['message']= "User has been Blocked";
        $this->session->set_userdata($sdata);
        redirect('superadmin/manage_user');
    }
    public function active_user($user_id){
        $this->super_admin_model->active_user_by_id($user_id);

        $sdata=array();
        $sdata['message']= "User has been Activated";
        $this->session->set_userdata($sdata);
        redirect('superadmin/manage_user');
    }

    public function show_user($user_id){
        $data=array();
        $data['title'] = 'Show User';

        $data['user_info']=$this->super_admin_model->select_user_info_by_id($user_id);
        $data['main_content'] = $this->load->view('admin/pages/post/show_user',$data,true);
        $this->load->view('admin/admin_layout',$data);

    }

    public function delete_user($user_id){
        $this->super_admin_model->delete_user_by_id($user_id);

        $sdata=array();
        $sdata['message']= "User has been Deleted";
        $this->session->set_userdata($sdata);
        redirect('superadmin/manage_user');
    }

    public function make_block_user($user_id){
        $this->super_admin_model->block_user_by_id($user_id);

        $sdata=array();
        $sdata['message']= "User has been Blocked";
        $this->session->set_userdata($sdata);
        redirect('superadmin/show_user/'.$user_id);
    }
    public function make_active_user($user_id){
        $this->super_admin_model->active_user_by_id($user_id);

        $sdata=array();
        $sdata['message']= "User has been activated";
        $this->session->set_userdata($sdata);
        redirect('superadmin/show_user/'.$user_id);
    }



    public function logout(){
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_id');
        $sdata=array();
        $sdata['message'] = 'You are Successfully Logout';
        $this->session->set_userdata($sdata);
        redirect('admin/admin_login','refresh');
    }



}
