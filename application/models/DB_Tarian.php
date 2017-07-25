<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DB_Tarian extends CI_Model {

	

	public function __construct()
	{
		parent::__construct();
		
	}
	public function RetrieveList() 
	{
		$this->db->order_by('id_post','DESC');
		$query = $this->db->query("SELECT * from post t, user u where t.uid = u.uid and kategori = 'tarian' order by id_post desc");
		return $query->result();
	}

	public function LoadList($data)
	{
		$query = $this->db->get_where('post', $data);
		return $query;
	}
	public function RetrieveIsi($id_post)
	{
		$query = $this->db->query("SELECT * from post t, user u where t.uid = u.uid and id_post = '$id_post' and kategori = 'tarian'");
		return $query->result();
	}
	public function ambilSatu($id_post)
	{
		$query = $this->db-> query("SELECT * FROM post WHERE id_post='$id_post' ");
		return $query->result();	
	}
	public function updateInformasiTarian($file,$id_post)
	{
		$query=$this->db->update('post',$file, array('id_post'=>$id_post));
		return $query;
	}
	public function DropData($id_post)
	{
		$query = $this->db-> query("DELETE FROM post WHERE id_post='$id_post' ");
		return $query;
	}
	public function insertInformasiTarian($file)
	{
		$query = $this->db->insert('post', $file);
		return $query;
	}
}

