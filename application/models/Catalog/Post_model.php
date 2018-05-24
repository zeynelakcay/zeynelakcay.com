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

    public function post_read_count($count)
    {
	$this->db->query('SET TRANSACTION ISOLATION LEVEL READ COMMITTED');
	$this->db->trans_start();
	$data_set = array(
	    'count' => $count,
	);
	$this->db->where('post_read_count_id', 1);
	$this->db->update('tbl_post_read_count', $data_set);
	$this->db->trans_complete();
    }

    public function get_post_read_count()
    {
	$query = $this->db->query("SELECT tprc.* FROM tbl_post_read_count tprc ");
	return $query->row_array();
    }

}
