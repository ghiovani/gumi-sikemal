<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DB_Search extends CI_Model {

	

	public function __construct()
	{
		parent::__construct();
		
	}
	public function RetrieveData($keyword) 
	{
		$query = $this->db->query("SELECT * from post p, user u where p.uid = u.uid and judul like '%$keyword%' order by id_post desc");
		return $query->result();
	}
	public function RetrieveIsi($id_post)
	{
		$query = $this->db->query("SELECT * from post s, user u where s.uid = u.uid and id_post = '$id_post'");
		return $query->result();
	}
	public function ambilSatu($id_post)
	{
		$query = $this->db-> query("SELECT * FROM post WHERE id_post='$id_post' ");
		return $query->result();	
	}
	public function updateInformasiSearch($file,$id_post)
	{
		$query=$this->db->update('post',$file, array('id_post'=>$id_post));
		return $query;
	}
	public function DropData($id_post)
	{
		$query = $this->db-> query("DELETE FROM post WHERE id_post='$id_post' ");
		return $query;
	}
}

