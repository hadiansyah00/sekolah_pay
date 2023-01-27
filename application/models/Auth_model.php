<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

	public function cek_email($email)
	{
		$query = $this->db->get_where('pmb', ['email' => $email]);
		return $query->num_rows();
	}

	public function get_password($email)
	{
		$data = $this->db->get_where('pmb', ['email' => $email])->row_array();
		return $data['password'];
	}

	public function userdata($email)
	{
		return $this->db->get_where('pmb', ['email' => $email])->row_array();
	}

	public function changePassword($email)
	{
		$data = $this->db->get_where('pmb', ['email' => $email])->row_array();
		return $data['password'];
	}
}
