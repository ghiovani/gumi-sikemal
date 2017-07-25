<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DB_User extends CI_Model {
	var $gallery_path_url;
	var $gallery_path;
	public function __construct()
	{
		parent::__construct();
		$this->gallery_path = realpath(APPPATH . '../assets/img/member/');
		$this->gallery_path_url = base_url() . 'assets/img/member/';
		$this->load->helper(array('url','html','form'));
	}

			public function RetrieveData($data) {

				$query = $this->db->get_where('user', $data);
				return $query;
			}
			public function RetrieveDataProfil($uid)
			{
				$query = $this->db->get_where('user', $uid);
				return $query->result();	
			}
			// public function insertData() {
			// 	$username = $this->input->post('username');
			// 	$password = md5($this->input->post('password'));
			// 	$level = "member";
			// 	$email = $this->input->post('email');
			// 	$nama = $this->input->post('nama');
			// 	$alamat = $this->input->post('alamat');
			// 	$notelp = $this->input->post('notelp');
				 
			// 	$instagram =$this->input->post('instagram');
			// 	$this->load->library('upload');
		 //        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
		 //        $config['upload_path'] = "$gallery_path_url"; //path folder
		 //        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		 //        $config['max_size'] = '2048'; //maksimum besar file 2M
		 //        $config['max_width']  = '1288'; //lebar maksimum 1288 px
		 //        $config['max_height']  = '768'; //tinggi maksimu 768 px
		 //        $config['file_name'] = $nmfile; //nama yang terupload nantinya
		 
		 //        $this->upload->initialize($config);
		         
		 //        if($_FILES['foto']['name'])
		 //        {
		 //            if ($this->upload->do_upload('foto'))
		 //            {
		 //                $gbr = $this->upload->data();
		 //                $data = array(
		 //                  'foto' =>$gbr['file_name']
		                   
		 //                );
			// 			$q=$this->db->query('select count(uid) FROM user');
			// 			$insertData = $this->db->query("INSERT INTO user VALUES('$q','$username','$password','$level','$email','$nama','$alamat','$notelp','$data','$instagram')");
		 //                // $this->mupload->get_insert($data); //akses model untuk menyimpan ke database
		 //                //pesan yang muncul jika berhasil diupload pada session flashdata
		 //                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
		 //                 //jika berhasil maka akan ditampilkan view vupload
		 //            }else{
		 //                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
		 //                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
		 //                 //jika gagal maka akan ditampilkan form upload
		 //            }
		 //        }
			// 	// See more at: http://www.fabernainggolan.net/upload-image-rename-codeigniter-dan-menyimpan-ke-database#sthash.ab712sOs.dpuf
			// 	// $config = array(
			// 	// 'upload_path' => "./assets/img/member",
			// 	// 'allowed_types' => "gif|jpg|png|jpeg",
			// 	// 'overwrite' => TRUE,
			// 	// 'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			// 	// 'max_height' => "1024",
			// 	// 'max_width' => "1024"
			// 	// );
			// 	// $this->load->library('upload', $config);

			// 	// if($this->upload->do_upload())
			// 	// {
			// 	// $data = array('upload_data' => $this->upload->data());
			// 	// }
			// 	// else
			// 	// {
			// 	// $error = array('error' => $this->upload->display_errors());
			// 	// }
				
			// }
			function insertData($data)
			{
				$this->db->insert('user',$data);
			}
			function cek_username($user,$email)
			{
				$query=$this->db->query("select * from user where username='$user' or email='$email'");
				return $query;
			}
			public function getData($uid)
			{
				$query = $this->db-> query("SELECT * FROM user WHERE uid='$uid' ");
				return $query->result();	
			}
			public function logout()
			{
				$this->session->unset_userdata(array('username' => '','nama' => '', 'login' => FALSE));
				$this->session->sess_destroy();
			}
			public function select() {
			$select = $this->db->query("SELECT * FROM user ORDER BY uid");
			return $select->result();
			}
			public function updateprofil($file,$uid)
			{
			    
			   $query=$this->db->update('user',$file, array('uid'=>$uid));
			return $query;
		 
				
			}
}





