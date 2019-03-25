<?php

/**
 * 
 */
class Login_m extends CI_Model
{
	
	public function admin($post)
	{
		$a = $this->db->escape($post['username']);
		$b = $this->db->escape($post['password']);

		$c = $this->db->query("select * from admin where Nama = $a and Password = $b");
		return $c->result_array();
	}
}