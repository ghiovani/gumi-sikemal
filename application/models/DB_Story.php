<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DB_Story extends CI_Model {

	

	public function __construct()
	{
		parent::__construct();
		
	}
	public function RetrieveList() 
	{
		$this->db->order_by('id_story','DESC');
		$query = $this->db->query('SELECT * from story s, user u where s.uid = u.uid order by id_story desc');
		return $query->result();
	}

	public function LoadData($data)
	{
		$query = $this->db->get_where('story', $data);
		return $query;
	}
	public function insertData($file)
	{
		
		$query = $this->db->insert('story', $file);
		return $query;
	}
	public function updateStory($file,$id_story)
	{
		$query=$this->db->update('story',$file, array('id_story'=>$id_story));
		return $query;
	}
	function Story($offset,$limit)
	{
			$q=$this->db->query("SELECT * from story left join user on story.uid=user.uid order by id_story DESC LIMIT $offset,$limit");
			return $q;
	}
	public function ambilSatu($id_story)
	{
		$query = $this->db-> query("SELECT * FROM story WHERE id_story='$id_story' ");
		return $query->result();	
	}
	function insertStory($data)
		{
			$s=$this->db->insert('story',$data);
			return $s;
		}
	function Total_Data($tabel)
		{
			$q=$this->db->query("select * from $tabel");
			return $q;
		}
	function DropData($id_story)
	{
		$query = $this->db-> query("DELETE FROM story WHERE id_story='$id_story' ");
		return $query;
	}
	function RetrieveIsi($id_story)
	{
		$query = $this->db->query("SELECT * from story s, user u where s.uid = u.uid and id_story = '$id_story'");
		return $query->result();
	}
}

