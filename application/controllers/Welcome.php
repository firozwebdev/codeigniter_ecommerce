<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data=[];
		$data['all_category']= $this->welcome_model->select_all_category_info();
		$data['products_normal']= $this->welcome_model->select_all_normal_product_info();
		$data['products_featured']= $this->welcome_model->select_all_featured_product_info();
		$data['products_latest']= $this->welcome_model->select_all_latest_product_info();
		$data['main_content'] = $this->load->view('front/pages/home_page',$data,true);
		$this->load->view('front/front_layout',$data);
	}


	public function single_product($product_id){
		$data=[];
		$data['all_category']= $this->welcome_model->select_all_category_info();
		$data['product']= $this->welcome_model->select_product_info_by_id($product_id);
		$data['products_latest']= $this->welcome_model->select_latest_five_product_info();
		$data['product_images']=$this->welcome_model->single_product_images_info($product_id);
		$data['main_content'] = $this->load->view('front/pages/single_page',$data,true);
		$this->load->view('front/front_layout',$data);
	}
}
