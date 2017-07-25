<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DB_Event extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function RetrieveList() 
	{
		$this->db->order_by('id_event','DESC');
		$query = $this->db->query('SELECT * from event e, user u where e.uid = u.uid order by id_event desc');
		return $query->result();
	}

	public function LoadList($data)
	{
		$query = $this->db->get_where('Event', $data);
		return $query;
	}
	public function RetrieveIsi($id_event)
	{
		$query = $this->db->query("SELECT * from event e, user u where e.uid = u.uid and id_event = '$id_event'");
		return $query->result();
	}
		public function ambilSatu($id_event)
	{
		$query = $this->db-> query("SELECT * FROM event WHERE id_event='$id_event' ");
		return $query->result();	
	}
	public function updateKalenderEvent($id_event)
	{
		$tanggal_event = $this->input->post('tanggal_event');
		$jam_event = $this->input->post('jam_event');
		$judul  = $this->input->post('judul');	
		$content  = $this->input->post('content');
		$nama_lokasi  = $this->input->post('nama_lokasi');
		$location  = $this->input->post('location');



		// $pilihan_a  = $this->input->post('pilihan_a');	
		// $pilihan_b  = $this->input->post('pilihan_b');	
		$data = array (
			'tanggal_event'=>$tanggal_event,
			'jam_event'=>$jam_event,
			'judul'  => $judul,
			'isi'=>$content,
			'nama_lokasi'=>$nama_lokasi,
			'location'=>$location
			// // 'PILIHAN_A' => $pilihan_a,
			// 'PILIHAN_B' => $pilihan_b			
			);  
		$query=$this->db->update('event',$data, array('id_event'=>$id_event));
		return $query;
	}
	public function DropData($id_event)
	{
		$query = $this->db-> query("DELETE FROM event WHERE id_event='$id_event' ");
		return $query;
	}
	public function insertKalenderEvent($file)
	{
		$query = $this->db->insert('event', $file);
		return $query;
	}
	
}

/* End of file E_Pengguna.php */
/* Location: ./application/models/E_Pengguna.php */