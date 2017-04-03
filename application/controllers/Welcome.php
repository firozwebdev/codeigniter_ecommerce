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

	public function add_to_cart(){

        $qty = $this->input->post('quantity');
        $product_id = $this->input->post('product_id');
        $data['product']= $this->welcome_model->select_product_info_by_id($product_id);

        //$this->load->library('cart');
        $data = array(
            'id'      => 'sku_123ABC',
            'qty'     => $qty,
            'price'   => $data['product']->product_present_price,
            'name'    => $data['product']->product_name,
            'options' => array('image' => $data['product']->product_image)
        );

        $this->cart->insert($data);

        redirect('welcome/show_cart');
    }

    public function show_cart(){
	    $data = [];
        $data['main_content'] = $this->load->view('front/pages/cart_view',$data,true);
        $this->load->view('front/front_layout',$data);
    }

    public function update_cart(){
        $data = [];
        $data['rowid'] = $this->input->post('rowid');
        $data['qty'] = $this->input->post('quantity');
        $this->cart->update($data);
        redirect('welcome/show_cart');
    }

    public function remove_cart($rowid){
        $rowid = $rowid;
        $this->cart->remove($rowid);
        redirect('welcome/show_cart');
    }


    //checkout part goes here..........
    public function billing_address(){
        $data = [];
        $data['main_content'] = $this->load->view('front/pages/checkout','',true);
        $this->load->view('front/front_layout',$data);

    }

    public function save_billing_info(){
        $data = [];
        $data['name'] = $this->input->post('name');
        $data['email_address'] = $this->input->post('email_address');
        $data['country'] = $this->input->post('country');
        $data['mobile'] = $this->input->post('mobile');

        $billing_id = $this->welcome_model->save_billing_info($data);
        $this->session->set_userdata("billing_id",$billing_id);

        $sdata=array();
        $sdata['message']= "Billing Information has been saved Successfully";
        $this->session->set_userdata($sdata);
        redirect('welcome/payment_method');
    }

    public function payment_method(){
        $data = [];
        $data['main_content'] = $this->load->view('front/pages/payment_method','',true);
        $this->load->view('front/front_layout',$data);
    }

    public function order_place(){
       $billing_id = $this->session->userdata("billing_id");
       $payment_method = $this->input->post('payment_method');
       if($payment_method == 'cash'){

       }
       if($payment_method == 'paypal'){

       }
    }
}
