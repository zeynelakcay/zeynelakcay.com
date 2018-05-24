<?php

class About_model extends CI_Model
{

    public function get_about()
    {
	$query = $this->db->query("SELECT ta.* FROM tbl_about ta WHERE ta.about_id =1");
	return $query->row_array();
    }

    public function edit_about()
    {
	$this->db->query('SET TRANSACTION ISOLATION LEVEL READ COMMITTED');
	$this->db->trans_start();
	$data_set = array(
	    'about' => $this->input->post("about")
	);
	$this->db->where('about_id', 1);
	$this->db->update('tbl_about', $data_set);
	$this->db->trans_complete();
	if ($this->db->trans_status() === FALSE)
	{
	    return 0;
	}
	else
	{
	    return 1;
	}
    }

}
