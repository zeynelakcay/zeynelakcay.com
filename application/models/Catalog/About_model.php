<?php

class About_model extends CI_Model
{

    public function get_about()
    {
	$query = $this->db->query("SELECT ta.* FROM tbl_about ta WHERE ta.about_id =1");
	return $query->row_array();
    }

}
