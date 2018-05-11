<?php

class Post_model extends CI_Model
{

    public function get_posts()
    {
	$query = $this->db->query("SELECT tp.* FROM tbl_posts tp WHERE tp.status = 1");
	return $query->result_array();
    }

    public function getPost($post_id)
    {
	$query = $this->db->query("SELECT tp.* FROM tbl_posts tp WHERE tp.status = 1 AND tp.post_id ='" . $post_id . "'");
	return $query->row_array();
    }

}
