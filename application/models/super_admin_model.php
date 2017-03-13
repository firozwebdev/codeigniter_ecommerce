<?php

/**
 * Created by PhpStorm.
 * User: sabuz
 * Date: 1/8/2016
 * Time: 3:11 PM
 */
class Super_Admin_Model extends CI_Model
{



    public function save_post_info($data){
        $this->db->insert('tbl_post',$data);

    }

    public function select_all_post_info(){
        $this->db->select('*')
            ->from('tbl_post')
            ->order_by('post_id','desc');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_post_by_id($post_id){
        $this->db->set('post_status',0)
            ->where('post_id',$post_id)
            ->update('tbl_post');
    }

    public function published_post_by_id($post_id){
        $this->db->set('post_status',1)
            ->where('post_id',$post_id)
            ->update('tbl_post');
    }

    public function select_post_info_by_id($post_id){
        $this->db->select('*')
            ->from('tbl_post')
            ->where('post_id',$post_id);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function delete_post_by_id($post_id){
        $this->db->where('post_id',$post_id)
            ->delete('tbl_post');
    }


    public function update_post_without_image($data){
        $this->db->where('post_id', $data['post_id'])
            ->update('tbl_post',$data);


    }
    public function update_post_with_image($data){
        $this->db->where('post_id', $data['post_id'])
            ->update('tbl_post',$data);
    }

    public function select_all_comment_info(){
        $this->db->select('*')
            ->from('tbl_comment')
            ->order_by('comment_id','desc');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_comment_by_id($comment_id){
        $this->db->set('comment_status',0)
            ->where('comment_id',$comment_id)
            ->update('tbl_comment');
    }
    public function published_comment_by_id($comment_id){
        $this->db->set('comment_status',1)
            ->where('comment_id',$comment_id)
            ->update('tbl_comment');
    }

    public function delete_comment_by_id($comment_id){
        $this->db->where('comment_id',$comment_id)
            ->delete('tbl_comment');
    }

    public function select_comment_info_by_id($comment_id){
        $this->db->select('*')
            ->from('tbl_comment')
            ->where('comment_id',$comment_id);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_all_user_info(){
        $this->db->select('*')
            ->from('tbl_user')
            ->order_by('user_id','desc');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function block_user_by_id($user_id){
        $this->db->set('user_status',0)
            ->where('user_id',$user_id)
            ->update('tbl_user');
    }

    public function active_user_by_id($user_id){
        $this->db->set('user_status',1)
            ->where('user_id',$user_id)
            ->update('tbl_user');
    }

    public function select_user_info_by_id($user_id){
        $this->db->select('*')
            ->from('tbl_user')
            ->where('user_id',$user_id);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function delete_user_by_id($user_id){
        $this->db->where('user_id',$user_id)
            ->delete('tbl_user');
    }


}