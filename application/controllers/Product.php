<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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


    public function add_product(){
        $data= array();
        $data['editor']= $this->data;
        $data['all_category']= $this->product_model->select_all_category_info();
        $data['all_brand']= $this->product_model->select_all_brand_info();
        $data['title'] = 'Add Product';
        $data['main_content'] = $this->load->view('admin/pages/product/add_product',$data,true);
        $this->load->view('admin/admin_layout',$data);
    }

    public function save_product(){


        $data=array();
        $data['product_name']=$this->input->post('product_name',true);
        $data['category_id']= $this->input->post('category_id',true);
        $data['brand_id']= $this->input->post('brand_id',true);
        $data['product_description']= $this->input->post('product_description',true);
        $data['product_previous_price']= $this->input->post('product_previous_price',true);
        $data['product_present_price']= $this->input->post('product_present_price',true);
        $data['product_color']= $this->input->post('product_color',true);
        $data['product_type']= $this->input->post('product_type',true);
        //$data['product_image']= $this->input->post('product_image',true);
        $data['product_quantity']= $this->input->post('product_quantity',true);
        $data['product_reorder_level']= $this->input->post('product_reorder_level',true);




        /*
         * Start Image Upload
         */

        $config['upload_path'] = 'assets/back/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '5000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        //$error='';
        //$fdata=array();



        $this->upload->initialize($config);

        //code for single image upload
        if($this->upload->do_upload('product_image')){

            $img_data = ['upload_data' => $this->upload->data()];
            //$imagedetails = getimagesize($_FILES['product_image']['tmp_name']);
            //$width = $imagedetails[0];
           // $height = $imagedetails[1];
           // echo $width;
           // die();
            $path = $img_data['upload_data']['full_path'];
            $file = $img_data['upload_data']['file_name'];

            $tests = [1];
            foreach($tests as $test){
                $this->main_image_resize($path,$file,'500','500');
                $this->main_image_resize($path,$file,'300','300');
                $this->main_image_resize($path,$file,'162','162');
            }




            $image_name = $file;
            $data['product_image']= $image_name;
            $product_id =  $this->product_model->save_product_info($data);

        }







        //code for multiple image upload
        if ( ! $this->upload->do_upload("product_images"))
        {
            $error =  $this->upload->display_errors();
            echo $error;
            exit();
        }
        else
        {
            $img_data=$this->upload->data();



            foreach($img_data as $value){
                $path = $value['full_path'];
                $file = $value['file_name'];
                $this->main_image_resize($path,$file,'500','500');
                $this->main_image_resize($path,$file,'300','300');
                $this->main_image_resize($path,$file,'162','162');


                $img['product_id']=$product_id;
               // $img['product_image']=$config['upload_path']. $value['file_name'];
                $img['product_image']= $value['file_name'];
                $this->product_model->save_product_image_info($img);

            }


        }



        $sdata=array();
        $sdata['message']= "Save Product Information Successfully";
        $this->session->set_userdata($sdata);
        redirect('product/manage_product');


    }

    function main_image_resize($path,$file,$width,$height)

    {

        $config['image_library']    = "gd2";
        $config['source_image']     = $path;
        $config['create_thumb']     = false;
        $config['maintain_ratio']   = false;
        $config['width'] = $width;
        $config['height'] = $height;
        if($width==300){
            $config['new_image'] = 'medium-'.$file;
        }
        if($width==500){
            $config['new_image'] = 'high-'.$file;
        }
        if($width==162){
            $config['new_image'] = 'small-'.$file;
        }




        $this->image_lib->initialize($config);

        $this->image_lib->resize();

    }
    function multiple_image_resize($path,$file,$width,$height)

    {

        $config['image_library']    = "gd2";
        $config['source_image']     = $path;
        $config['create_thumb']     = TRUE;
        $config['maintain_ratio']   = TRUE;
        $config['width'] = $width;
        $config['height'] = $height;
        $config['new_image'] = 'assets/back/resize/'.$file;



        $this->image_lib->initialize($config);

        $this->image_lib->resize();

    }

    public function manage_product(){
        $data = array();
        $data['title'] = 'Manage Product';
        $data['products']= $this->product_model->select_all_product_info();

        $data['main_content'] = $this->load->view('admin/pages/product/manage_product',$data,true);
        $this->load->view('admin/admin_layout',$data);
    }
    public function unpublished_product($product_id){
        $this->product_model->unpublished_product_by_id($product_id);

        $sdata=array();
        $sdata['message']= "Product has been Unpublished";
        $this->session->set_userdata($sdata);
        redirect('product/manage_product');
    }
    public function published_product($product_id){
        $this->product_model->published_product_by_id($product_id);

        $sdata=array();
        $sdata['message']= "Product has been Published";
        $this->session->set_userdata($sdata);
        redirect('product/manage_product');
    }


    public function edit_product($product_id){
        $data=array();
        $data['title'] = 'Edit Product';
        $data['editor']= $this->data;
        $data['categories']=$this->product_model->select_all_category_info();
        $data['brands']=$this->product_model->select_all_brand_info();
        $data['product_info']=$this->product_model->select_product_info_by_id($product_id);
        $data['product_images']=$this->product_model->single_product_images_info($product_id);
        //echo '<pre>';
        //print_r($data['product_images']);
        //die();

        $data['main_content'] = $this->load->view('admin/pages/product/edit_product',$data,true);
        $this->load->view('admin/admin_layout',$data);

    }


    public function update_product(){
        //echo '<pre>';
        //print_r($_FILES['product_image_three']['name']);
        //die();

        $data=array();
        $data['product_id']=$this->input->post('product_id',true);
        $image_two_id=$this->input->post('image_two_id',true);
        $image_three_id=$this->input->post('image_three_id',true);
        $data['product_name']=$this->input->post('product_name',true);
        $data['category_id']= $this->input->post('category_id',true);
        $data['brand_id']= $this->input->post('brand_id',true);
        $data['product_description']= $this->input->post('product_description',true);
        $data['product_previous_price']= $this->input->post('product_previous_price',true);
        $data['product_present_price']= $this->input->post('product_present_price',true);
        $data['product_color']= $this->input->post('product_color',true);
        $data['product_type']= $this->input->post('product_type',true);
        //$data['product_image']= $this->input->post('product_image',true);
        $data['product_quantity']= $this->input->post('product_quantity',true);
        $data['product_reorder_level']= $this->input->post('product_reorder_level',true);

        $config['upload_path'] = 'assets/back/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $config['remove_space'] = true;
        $this->load->library('image_lib', $config);

        $this->upload->initialize($config);

        if( ! $_FILES['product_image']['name'] && ! $_FILES['product_image_two']['name'] && ! $_FILES['product_image_three']['name']) {
            //echo "no image";


            $this->product_model->update_product_without_image($data);

        }else if(  $_FILES['product_image']['name'] && ! $_FILES['product_image_two']['name'] && ! $_FILES['product_image_three']['name']) {
            //echo "First Image";

            $this->upload->initialize($config);
            if($this->upload->do_upload('product_image')){
                $img_data = ['upload_data' => $this->upload->data()];
                //$imagedetails = getimagesize($_FILES['product_image']['tmp_name']);
                //$width = $imagedetails[0];
                // $height = $imagedetails[1];
                // echo $width;
                // die();
                $path = $img_data['upload_data']['full_path'];
                $file = $img_data['upload_data']['file_name'];

                $tests = [1];
                foreach($tests as $test){
                    $this->main_image_resize($path,$file,'500','500');
                    $this->main_image_resize($path,$file,'300','300');
                    $this->main_image_resize($path,$file,'162','162');
                }
                $image_name = $file;
                $data['product_image']= $image_name;
                $this->product_model->update_product_with_image($data);
            }


        }else if( ! $_FILES['product_image']['name'] &&  $_FILES['product_image_two']['name'] &&  $_FILES['product_image_three']['name']) {
            //echo "Two and three";
            if (  $this->upload->do_upload("product_image_two"))
            {
                $img_data = $this->upload->data();
                //echo '<pre>';
                //print_r($img_data);
                //die();
                $path = $img_data['full_path'];
                $file = $img_data['file_name'];
                $this->main_image_resize($path,$file,'500','500');
                $this->main_image_resize($path,$file,'300','300');
                $this->main_image_resize($path,$file,'162','162');
                $img['img_id'] = $image_two_id;
                $img['product_id']=$data['product_id'];
                $img['product_image']=$config['upload_path']. $img_data['file_name'];
                $img['product_image'] = $img_data['file_name'];
                $this->product_model->update_product_image_info($img);

            }
            if (  $this->upload->do_upload("product_image_three"))
            {
                $img_data = $this->upload->data();
                //echo '<pre>';
                //print_r($img_data);
                //die();
                $path = $img_data['full_path'];
                $file = $img_data['file_name'];
                $this->main_image_resize($path,$file,'500','500');
                $this->main_image_resize($path,$file,'300','300');
                $this->main_image_resize($path,$file,'162','162');
                $img['img_id'] = $image_three_id;
                $img['product_id']=$data['product_id'];
                $img['product_image']=$config['upload_path']. $img_data['file_name'];
                $img['product_image'] = $img_data['file_name'];
                $this->product_model->update_product_image_info($img);

            }



        }else if( ! $_FILES['product_image']['name'] &&  $_FILES['product_image_two']['name'] && ! $_FILES['product_image_three']['name']) {
            //echo "second Image";

            if (  $this->upload->do_upload("product_image_two"))
            {
                $img_data = $this->upload->data();
                //echo '<pre>';
                //print_r($img_data);
                //die();
                $path = $img_data['full_path'];
                $file = $img_data['file_name'];
                $this->main_image_resize($path,$file,'500','500');
                $this->main_image_resize($path,$file,'300','300');
                $this->main_image_resize($path,$file,'162','162');
                $img['img_id'] = $image_two_id;
                $img['product_id']=$data['product_id'];
                $img['product_image']=$config['upload_path']. $img_data['file_name'];
                $img['product_image'] = $img_data['file_name'];
                $this->product_model->update_product_image_info($img);

            }


        }else if( ! $_FILES['product_image']['name'] && ! $_FILES['product_image_two']['name'] &&  $_FILES['product_image_three']['name']) {
            //echo "third Image";

            if (  $this->upload->do_upload("product_image_three"))
            {
                $img_data = $this->upload->data();
                //echo '<pre>';
                //print_r($img_data);
                //die();
                $path = $img_data['full_path'];
                $file = $img_data['file_name'];
                $this->main_image_resize($path,$file,'500','500');
                $this->main_image_resize($path,$file,'300','300');
                $this->main_image_resize($path,$file,'162','162');
                $img['img_id'] = $image_three_id;
                $img['product_id']=$data['product_id'];
                $img['product_image']=$config['upload_path']. $img_data['file_name'];
                $img['product_image'] = $img_data['file_name'];
                $this->product_model->update_product_image_info($img);

            }


        }else {
            //echo "all images" or single image and any one of two images
            //first image
            $this->upload->initialize($config);
            if ($this->upload->do_upload('product_image')) {
                $img_data = ['upload_data' => $this->upload->data()];
                //$imagedetails = getimagesize($_FILES['product_image']['tmp_name']);
                //$width = $imagedetails[0];
                // $height = $imagedetails[1];
                // echo $width;
                // die();
                $path = $img_data['upload_data']['full_path'];
                $file = $img_data['upload_data']['file_name'];

                $tests = [1];
                foreach ($tests as $test) {
                    $this->main_image_resize($path, $file, '500', '500');
                    $this->main_image_resize($path, $file, '300', '300');
                    $this->main_image_resize($path, $file, '162', '162');
                }
                $image_name = $file;
                $data['product_image'] = $image_name;
                $this->product_model->update_product_with_image($data);
            }
            //second image
            if ($this->upload->do_upload("product_image_two")) {
                $img_data = $this->upload->data();
                //echo '<pre>';
                //print_r($img_data);
                //die();
                $path = $img_data['full_path'];
                $file = $img_data['file_name'];
                $this->main_image_resize($path, $file, '500', '500');
                $this->main_image_resize($path, $file, '300', '300');
                $this->main_image_resize($path, $file, '162', '162');
                $img['img_id'] = $image_two_id;
                $img['product_id'] = $data['product_id'];
                $img['product_image'] = $config['upload_path'] . $img_data['file_name'];
                $img['product_image'] = $img_data['file_name'];
                $this->product_model->update_product_image_info($img);

            }

            //third image

            if ($this->upload->do_upload("product_image_three")) {
                $img_data = $this->upload->data();
                //echo '<pre>';
                //print_r($img_data);
                //die();
                $path = $img_data['full_path'];
                $file = $img_data['file_name'];
                $this->main_image_resize($path, $file, '500', '500');
                $this->main_image_resize($path, $file, '300', '300');
                $this->main_image_resize($path, $file, '162', '162');
                $img['img_id'] = $image_three_id;
                $img['product_id'] = $data['product_id'];
                $img['product_image'] = $config['upload_path'] . $img_data['file_name'];
                $img['product_image'] = $img_data['file_name'];
                $this->product_model->update_product_image_info($img);

            }


        }

        $sdata=array();
        $sdata['message']= "Product has been Updated";
        $this->session->set_userdata($sdata);
        redirect('product/manage_product');
    }

    public function _secondupdate_product(){

        $data=array();
        $data['product_id']=$this->input->post('product_id',true);
        $image_two_id=$this->input->post('image_two_id',true);
        $image_three_id=$this->input->post('image_three_id',true);
        $data['product_name']=$this->input->post('product_name',true);
        $data['category_id']= $this->input->post('category_id',true);
        $data['brand_id']= $this->input->post('brand_id',true);
        $data['product_description']= $this->input->post('product_description',true);
        $data['product_previous_price']= $this->input->post('product_previous_price',true);
        $data['product_present_price']= $this->input->post('product_present_price',true);
        $data['product_color']= $this->input->post('product_color',true);
        $data['product_type']= $this->input->post('product_type',true);
        //$data['product_image']= $this->input->post('product_image',true);
        $data['product_quantity']= $this->input->post('product_quantity',true);

        $config['upload_path'] = 'assets/back/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $config['remove_space'] = true;
        $this->load->library('image_lib', $config);

        $this->upload->initialize($config);

        if( ! $_FILES['product_image']['name'] && ! $_FILES['product_images']['name'][0] && ! $_FILES['product_images']['name'][1]) {
            //echo "no image";


             $this->product_model->update_product_without_image($data);






        }else if( $_FILES['product_image']['name'] && ! $_FILES['product_images']['name'][0] && ! $_FILES['product_images']['name'][1] ) {
            //echo "single image";


           // $config['upload_path'] = 'assets/back/upload/';
           // $config['allowed_types'] = 'gif|jpg|png';
            //$config['max_size'] = '5000';
            //$config['max_width'] = '1024';
            //$config['max_height'] = '768';

            //$this->upload->initialize($config);
            if($this->upload->do_upload('product_image')){
                $img_data = ['upload_data' => $this->upload->data()];
                //$imagedetails = getimagesize($_FILES['product_image']['tmp_name']);
                //$width = $imagedetails[0];
                // $height = $imagedetails[1];
                // echo $width;
                // die();
                $path = $img_data['upload_data']['full_path'];
                $file = $img_data['upload_data']['file_name'];

                $tests = [1];
                foreach($tests as $test){
                    $this->main_image_resize($path,$file,'500','500');
                    $this->main_image_resize($path,$file,'300','300');
                    $this->main_image_resize($path,$file,'162','162');
                }
                $image_name = $file;
                $data['product_image']= $image_name;
                $this->product_model->update_product_with_image($data);
            }

        }elseif(! $_FILES['product_image']['name'] &&  $_FILES['product_images']['name'][0] && $_FILES['product_images']['name'][1]){
            //echo 'Two and three';

            if (  $this->upload->do_upload("product_images"))
            {
                $img_data = $this->upload->data();

                //echo '<pre>';
                //print_r($img_data);
                //die();
                $i = 1;
                foreach($img_data as $value){
                    if($i == 1){

                        $path = $value['full_path'];
                        $file = $value['file_name'];
                        $this->main_image_resize($path,$file,'500','500');
                        $this->main_image_resize($path,$file,'300','300');
                        $this->main_image_resize($path,$file,'162','162');
                        $img['img_id'] = $image_two_id;
                        $img['product_id']=$data['product_id'];
                        $img['product_image']=$config['upload_path']. $value['file_name'];
                        $img['product_image'] = $value['file_name'];
                        $something = $this->product_model->update_product_image_info($img);
                        echo $something;
                    }
                    if($i == 2){

                        $path = $value['full_path'];
                        $file = $value['file_name'];
                        $this->main_image_resize($path,$file,'500','500');
                        $this->main_image_resize($path,$file,'300','300');
                        $this->main_image_resize($path,$file,'162','162');
                        $img['img_id'] = $image_three_id;
                        $img['product_id']=$data['product_id'];
                        $img['product_image']=$config['upload_path']. $value['file_name'];
                        $img['product_image'] = $value['file_name'];
                        $something = $this->product_model->update_product_image_info($img);
                        echo $something;
                    }
                    $i++;
                }

            }

        }elseif( ! $_FILES['product_image']['name'] &&  $_FILES['product_images']['name'][0] && ! $_FILES['product_images']['name'][1]){
            //echo 'Two';

            if (  $this->upload->do_upload("product_images[0]"))
            {
                $img_data = $this->upload->data();

                echo '<pre>';
                print_r($img_data);
                die();

            }

        }elseif( ! $_FILES['product_image']['name'] && ! $_FILES['product_images']['name'][0] &&  $_FILES['product_images']['name'][1]){
            echo 'three';

        }elseif(  $_FILES['product_image']['name'] &&  $_FILES['product_images']['name'][0] &&  $_FILES['product_images']['name'][1]){
            //echo 'all images';
            if($this->upload->do_upload('product_image')){
                $img_data = ['upload_data' => $this->upload->data()];
                //$imagedetails = getimagesize($_FILES['product_image']['tmp_name']);
                //$width = $imagedetails[0];
                // $height = $imagedetails[1];
                // echo $width;
                // die();
                $path = $img_data['upload_data']['full_path'];
                $file = $img_data['upload_data']['file_name'];

                $tests = [1];
                foreach($tests as $test){
                    $this->main_image_resize($path,$file,'500','500');
                    $this->main_image_resize($path,$file,'300','300');
                    $this->main_image_resize($path,$file,'162','162');
                }
                $image_name = $file;
                $data['product_image']= $image_name;
                $this->product_model->update_product_with_image($data);
            }

          //if any config is needed, so create configuration for this upload

            if (  $this->upload->do_upload("product_images"))
            {
                $img_data = $this->upload->data();

                //echo '<pre>';
                //print_r($img_data);
                //die();
                $i = 1;
                foreach($img_data as $value){
                    if($i == 1){

                        $path = $value['full_path'];
                        $file = $value['file_name'];
                        $this->main_image_resize($path,$file,'500','500');
                        $this->main_image_resize($path,$file,'300','300');
                        $this->main_image_resize($path,$file,'162','162');
                        $img['img_id'] = $image_two_id;
                        $img['product_id']=$data['product_id'];
                        $img['product_image']=$config['upload_path']. $value['file_name'];
                        $img['product_image'] = $value['file_name'];
                        $something = $this->product_model->update_product_image_info($img);
                        echo $something;
                    }
                    if($i == 2){

                        $path = $value['full_path'];
                        $file = $value['file_name'];
                        $this->main_image_resize($path,$file,'500','500');
                        $this->main_image_resize($path,$file,'300','300');
                        $this->main_image_resize($path,$file,'162','162');
                        $img['img_id'] = $image_three_id;
                        $img['product_id']=$data['product_id'];
                        $img['product_image']=$config['upload_path']. $value['file_name'];
                        $img['product_image'] = $value['file_name'];
                        $something = $this->product_model->update_product_image_info($img);
                        echo $something;
                    }
                    $i++;
                }

            }


        }else {

            echo 'single image and any one of multiple image';

        }

    }

    public function _update_product(){

        //echo '<Pre>';
        //print_r( $_FILES['product_image']['name']);
        //die();
        $data=array();
        $data['product_id']=$this->input->post('product_id',true);
        $data['product_name']=$this->input->post('product_name',true);
        $data['category_id']= $this->input->post('category_id',true);
        $data['brand_id']= $this->input->post('brand_id',true);
        $data['product_description']= $this->input->post('product_description',true);
        $data['product_previous_price']= $this->input->post('product_previous_price',true);
        $data['product_present_price']= $this->input->post('product_present_price',true);
        $data['product_color']= $this->input->post('product_color',true);
        $data['product_type']= $this->input->post('product_type',true);
        //$data['product_image']= $this->input->post('product_image',true);
        $data['product_quantity']= $this->input->post('product_quantity',true);

        if( ! $_FILES['product_image']['name'] && ! $_FILES['product_images']['name'][0] && ! $_FILES['product_images']['name'][1]) {


           // $this->product_model->update_product_without_image($data);


            echo "no Image";


        }else if( $_FILES['product_image']['name'] && ! $_FILES['product_images']['name'][0] && ! $_FILES['product_images']['name'][1] ) {

            echo "single Image";

        }else if(! $_FILES['product_image']['name'] && ($_FILES['product_images']['tmp_name'][0] ||  $_FILES['product_images']['tmp_name'][1])) {
            echo "either one of two Image";

        }else{
            echo "all Image";

        }


die();

        $sdata=array();
        $sdata['message']= "Product has been Updated";
        $this->session->set_userdata($sdata);
        redirect('product/manage_product');






    }

    public function update_product_multiple_image(){

        $img = [];
        $img['img_id']  = $this->input->post('imgId');
        $img['product_id']  = $this->input->post('productId');
        $img['product_image']  = $this->input->post('imageName');

        $this->product_model->update_product_image_info($img);
    }



    public function delete_product($product_id){
        $this->product_model->delete_product_by_id($product_id);

        $sdata=array();
        $sdata['message']= "Product has been Deleted";
        $this->session->set_userdata($sdata);
        redirect('product/manage_product');
    }

}
