<?php

/**
 * Created by PhpStorm.
 * User: sabuz
 * Date: 1/8/2016
 * Time: 3:11 PM
 */
class Product_Model extends CI_Model
{

    public function select_all_category_info(){
        $this->db->select('*')
            ->from('tbl_category')
            ->order_by('category_id','desc');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }

    public function select_all_brand_info(){
        $this->db->select('*')
            ->from('tbl_brand')
            ->order_by('brand_id','desc');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }

    public function save_product_info($data){

        $this->db->insert('tbl_product',$data);
        $product_id=$this->db->insert_id();
        return $product_id;

    }

    public function save_product_image_info($img){
        $this->db->insert('tbl_img',$img);

    }

    public function select_all_product_info(){
        $this->db->select('tbl_product.*',false)
            ->select('tbl_brand.*',false)
            ->select('tbl_category.*',false)
            ->from('tbl_product')
            ->join('tbl_brand','tbl_product.brand_id=tbl_brand.brand_id','left')
            ->join('tbl_category','tbl_product.category_id=tbl_category.category_id','left')
            ->order_by('tbl_product.product_id','desc');


        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_product_by_id($product_id){
        $this->db->set('product_status',0)
            ->where('product_id',$product_id)
            ->update('tbl_product');
    }

    public function published_product_by_id($product_id){
        $this->db->set('product_status',1)
            ->where('product_id',$product_id)
            ->update('tbl_product');
    }

    public function select_product_info_by_id($product_id){
        $this->db->select('*')
            ->from('tbl_product')
            ->where('product_id',$product_id);

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

    public function delete_product_by_id($product_id){
        $this->db->where('product_id',$product_id)
            ->delete('tbl_product');
    }


    public function update_product_without_image($data){
        $this->db->where('product_id', $data['product_id'])
            ->update('tbl_product',$data);


    }
    public function update_product_with_image($data){
        $this->db->where('product_id', $data['product_id'])
            ->update('tbl_product',$data);
    }


    public function update_product_image_info($img){

        $this->db->where('img_id', $img['img_id'])
                     ->update('tbl_img', $img);


        return true;

    }
}