<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DB_Sejarah extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function RetrieveList() 
	{
		$this->db->order_by('id_post','DESC');
		$query = $this->db->query("SELECT * from post s, user u where s.uid = u.uid and kategori='sejarah' order by id_post desc");
		return $query->result();
	}

	public function LoadList($data)
	{
		$query = $this->db->get_where('sejarah', $data);
		return $query;
	}
	public function RetrieveIsi($id_post)
	{
		$query = $this->db->query("SELECT * from post s, user u where s.uid = u.uid and id_post = '$id_post' and kategori='sejarah'");
		return $query->result();
	}
	public function ambilSatu($id_post)
	{
		$query = $this->db-> query("SELECT * FROM post WHERE id_post='$id_post' ");
		return $query->result();	
	}
	public function updateInformasiBersejarah($file,$id_post)
	{
		$query=$this->db->update('post',$file, array('id_post'=>$id_post));
		return $query;
	}
	public function DropData($id_post)
	{
		$query = $this->db-> query("DELETE FROM post WHERE id_post='$id_post' ");
		return $query;
	}
	public function insertInformasiBersejarah($file)
	{
		$query = $this->db->insert('post', $file);
		return $query;
	}
}

/* End of file E_Pengguna.php */
/* Location: ./application/models/E_Pengguna.php */