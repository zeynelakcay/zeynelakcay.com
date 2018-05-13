<?php

class Category_model extends CI_Model
{

    public function get_categories()
    {
	$query = $this->db->query("SELECT tc.* FROM tbl_categories tc ");
	return $query->result_array();
    }

    public function get_category($category_id)
    {
	$query = $this->db->query("SELECT tp.* FROM tbl_categories tp WHERE tp.category_id ='" . $category_id . "'");
	return $query->row_array();
    }

    public function edit_category($category_id)
    {
	$this->db->query('SET TRANSACTION ISOLATION LEVEL READ COMMITTED');
	$this->db->trans_start();
	$data_set = array(
	    'title'		 => $this->input->post("title"),
	    'link'		 => $this->input->post("link"),
	    'content'	 => $this->input->post("content"),
	    'tag'		 => $this->input->post("tag"),
	    'write_date'	 => date("Y-m-d", strtotime($this->input->post("write_date"))),
	    'order'		 => $this->input->post("order"),
	    'status'	 => $this->input->post("status"),
	    'author'	 => $this->input->post("author"),
	    'category_id'	 => $this->input->post("category_id")
	);
	$this->db->where('post_id', $category_id);
	$this->db->update('tbl_posts', $data_set);
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

    public function add_category()
    {
	$this->db->query('SET TRANSACTION ISOLATION LEVEL READ COMMITTED');
	$this->db->trans_start();
	$data_set = array(
	    'title'		 => $this->input->post("title"),
	    'seo_title'	 => $this->input->post("seo_title"),
	    'update_time'	 => date("Y-m-d", strtotime($this->input->post("write_date"))),
	    'order'		 => $this->input->post("order"),
	    'status'	 => $this->input->post("status"),
	);
	$this->db->insert('tbl_categories', $data_set);
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

    public function delete_post($id)
    {
	$this->db->query('SET TRANSACTION ISOLATION LEVEL READ COMMITTED');
	$this->db->where('id', $id);
	$this->db->from('tbl_posts');
	$this->db->delete();
	if ($this->db->affected_rows() > 0)
	{
	    return 1;
	}
	else
	{
	    return 0;
	}
    }

}
