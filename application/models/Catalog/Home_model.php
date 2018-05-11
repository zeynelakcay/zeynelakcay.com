<?php

class Home_model extends CI_Model
{

    public function get_posts()
    {
	$query = $this->db->query("SELECT tp.* FROM tbl_posts tp WHERE tp.status = 1 order by post_id DESC");
	return $query->result_array();
    }

}
