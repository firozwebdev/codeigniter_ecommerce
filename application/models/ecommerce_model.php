<?php

/**
 * Created by PhpStorm.
 * User: sabuz
 * Date: 1/8/2016
 * Time: 3:11 PM
 */
class Ecommerce_Model extends CI_Model
{


    public function save_category_info($data)
    {
        $this->db->insert('tbl_eco_category', $data);
    }
}