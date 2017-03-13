<?php

/**
 * Created by PhpStorm.
 * User: sabuz
 * Date: 1/8/2016
 * Time: 3:11 PM
 */
class Category_Model extends CI_Model
{
    public function save_category_info($data)
    {
        $this->db->insert('tbl_category', $data);
    }

    public function select_all_category_info(){
        $this->db->select('*')
            ->from('tbl_category')
            ->order_by('category_id','desc');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }

    public function unpublished_category_by_id($category_id){
        $this->db->set('category_publication_status',0)
            ->where('category_id',$category_id)
            ->update('tbl_category');

    }
    public function published_category_by_id($category_id){
        $this->db->set('category_publication_status',1)
            ->where('category_id',$category_id)
            ->update('tbl_category');
    }

    public function select_category_info_by_id($category_id){
        $this->db->select('*')
            ->from('tbl_category')
            ->where('category_id',$category_id);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_info($data){
        $up = array(
            'category_name' => $data['category_name'],
            'category_description' => $data['category_description'],
            'category_publication_status' => $data['category_publication_status'],
        );

        $this->db->where('category_id', $data['category_id'])
            ->update('tbl_category',$up);
    }

    public function delete_category_by_id($category_id){
        $this->db->where('category_id',$category_id)
            ->delete('tbl_category');
    }

    public function select_all_published_category(){
        $this->db->select('*')
            ->from('tbl_category')
            ->where('category_publication_status',1);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
}