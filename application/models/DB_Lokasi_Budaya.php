<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DB_Lokasi_Budaya extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function RetrieveList() 
	{
		$this->db->order_by('id_loc','DESC');
		$query = $this->db->query('SELECT * from lokasi l, user u where l.uid = u.uid order by id_loc desc');
		return $query->result();
	}
	public function RetrieveIsi($id_loc)
	{
		$query = $this->db->query("SELECT * from lokasi l, user u where l.uid = u.uid and id_loc = '$id_loc'");
		return $query->result();
	}
	
	public function LoadList($data)
	{
		$query = $this->db->get_where('lokasi', $data);
		return $query;
	}
	public function ambilSatu($id_loc)
	{
		$query = $this->db-> query("SELECT * FROM lokasi WHERE id_loc='$id_loc' ");
		return $query->result();	
	}
	public function updateLokasiBudaya($id_loc)
	{

		$nama_lokasi  = $this->input->post('nama_lokasi');	
		$Location  = $this->input->post('location');	

		// $pilihan_a  = $this->input->post('pilihan_a');	
		// $pilihan_b  = $this->input->post('pilihan_b');	
		$data = array (
			'nama_lokasi'  => $nama_lokasi,
			'location'=>$Location
			// 'PILIHAN_A' => $pilihan_a,
			// 'PILIHAN_B' => $pilihan_b			
			);  
		$query=$this->db->update('lokasi',$data, array('id_loc'=>$id_loc));
		return $query;
	}
	public function DropData($id_loc)
	{
		$query = $this->db-> query("DELETE FROM lokasi WHERE id_loc='$id_loc' ");
		return $query;
	}
	public function insertLokasiBudaya($file)
	{
		$query = $this->db->insert('lokasi', $file);
		return $query;
	}

}

/* End of file E_Pengguna.php */
/* Location: ./application/models/E_Pengguna.php */