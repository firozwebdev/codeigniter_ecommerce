<?php

/**
 * Created by PhpStorm.
 * User: sabuz
 * Date: 1/8/2016
 * Time: 3:11 PM
 */
class Welcome_Model extends CI_Model
{
    public function select_all_category_info(){
        $this->db->select('*')
            ->from('tbl_category')
            ->order_by('category_id','desc');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }

    public function select_all_normal_product_info(){
        $this->db->select('*')
            ->from('tbl_product')
            ->where('product_type','normal')
            ->order_by('product_id','desc');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_all_featured_product_info(){
        $this->db->select('*')
            ->from('tbl_product')
            ->where('product_type','featured')
            ->order_by('product_id','desc');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_all_latest_product_info(){
        $this->db->select('*')
            ->from('tbl_product')
            ->order_by('product_id','desc')
            ->limit(10);


        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_latest_five_product_info(){
        $this->db->select('*')
            ->from('tbl_product')
            ->order_by('product_id','desc')
            ->limit(5);


        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_product_info_by_id($product_id){
        $this->db->select('tbl_product.*',false)
            ->select('tbl_brand.*',false)
            ->select('tbl_category.*',false)
            ->from('tbl_product')
            ->join('tbl_brand','tbl_product.brand_id=tbl_brand.brand_id','left')
            ->join('tbl_category','tbl_product.category_id=tbl_category.category_id','left')
            ->where('tbl_product.product_id',$product_id);



        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function single_product_images_info($product_id){
        $this->db->select('*')
            ->from('tbl_img')
            ->where('product_id',$product_id);


        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function save_billing_info($data){
        $this->db->insert('tbl_billing_address', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }


}