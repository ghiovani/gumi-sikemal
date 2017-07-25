<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DB_Rating_Komentar extends CI_Model {

	

	public function __construct()
	{
		parent::__construct();
		
	}
	public function RetrieveIsi($id_post)
	{
		$query = $this->db->query("SELECT * from user u, komentar k, post p where k.id_post = '$id_post' and k.uid = u.uid and k.id_post=p.id_post  order by id_komentar desc");
		return $query->result();
	}
	public function RetrieveIsiLimit($id_post)
	{
		$query = $this->db->query("SELECT * from user u, komentar k, post p where k.id_post = '$id_post' and k.uid = u.uid and k.id_post=p.id_post  order by id_komentar desc limit 5");
		return $query->result();
	}

	public function DropData($id_post)
	{
		$query = $this->db-> query("DELETE FROM post WHERE id_post='$id_post' ");
		return $query;
	}
	public function insertKomentar($file)
	{
		$query = $this->db->insert('komentar', $file);
		return $query;
	}
}

