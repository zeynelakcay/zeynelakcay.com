<?php

class Login_model extends CI_Model
{

    function user_login($email, $password)
    {
	$this->db->query('SET TRANSACTION ISOLATION LEVEL READ COMMITTED');
	$query = $this->db->query("SELECT * FROM tbl_users WHERE email = '" . $email . "' and password = '" . $password . "' AND status=1 LIMIT 1 ");
	return $query->row_array();
    }

    function user_login_log($id, $user_agent, $client_ip, $bas_company_id)
    {
	$this->db->query("insert into user_logins (user_id,login_date_time,agent,ip,bas_com_company_id) values ($id,now(),'$user_agent','$client_ip','$bas_company_id')");
    }

}
