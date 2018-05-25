<?php

class Profile_model extends CI_Model
{

    public function getUser($user_id)
    {
	$query = $this->db->query("SELECT tu.* FROM tbl_users tu WHERE tu.user_id ='" . $user_id . "'");
	return $query->row_array();
    }

    public function editUser($user_id)
    {
	$this->db->query('SET TRANSACTION ISOLATION LEVEL READ COMMITTED');
	$this->db->trans_start();
	$data_set = array(
	    'name'		 => $this->input->post("name"),
	    'surname'	 => $this->input->post("surname"),
	    'email'		 => $this->input->post("email"),
	    'phone'		 => $this->input->post("phone"),
	    'password'	 => $this->input->post("password")
	);
	$this->db->where('user_id', $user_id);
	$this->db->update('tbl_users', $data_set);
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
