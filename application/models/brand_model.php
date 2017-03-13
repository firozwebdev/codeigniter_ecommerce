<?php

/**
 * Created by PhpStorm.
 * User: sabuz
 * Date: 1/8/2016
 * Time: 3:11 PM
 */
class Brand_Model extends CI_Model
{
    public function save_brand_info($data)
    {
        $this->db->insert('tbl_brand', $data);
    }

    public function select_all_brand_info(){
        $this->db->select('*')
            ->from('tbl_brand')
            ->order_by('brand_id','desc');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }

    public function unpublished_brand_by_id($brand_id){
        $this->db->set('brand_publication_status',0)
            ->where('brand_id',$brand_id)
            ->update('tbl_brand');

    }
    public function published_brand_by_id($brand_id){
        $this->db->set('brand_publication_status',1)
            ->where('brand_id',$brand_id)
            ->update('tbl_brand');
    }

    public function select_brand_info_by_id($brand_id){
        $this->db->select('*')
            ->from('tbl_brand')
            ->where('brand_id',$brand_id);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_brand_info($data){
        $up = array(
            'brand_name' => $data['brand_name'],
            'brand_description' => $data['brand_description'],
            'brand_publication_status' => $data['brand_publication_status'],
        );

        $this->db->where('brand_id', $data['brand_id'])
            ->update('tbl_brand',$up);
    }

    public function delete_brand_by_id($brand_id){
        $this->db->where('brand_id',$brand_id)
            ->delete('tbl_brand');
    }

    public function select_all_published_brand(){
        $this->db->select('*')
            ->from('tbl_brand')
            ->where('brand_publication_status',1);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
}