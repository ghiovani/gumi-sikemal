<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    
  }

  public function index()
  {
		// status user login = BENAR, pindah ke halaman absen
       $this->load->view('Form_Login');
  }
  public function authentication() {
    $data = array('username' => $this->input->post('username', TRUE),
            'password' => md5($this->input->post('password', TRUE))
            );
    $this->load->model('DB_User'); // load model_user
    $hasil = $this->DB_User->RetrieveData($data);
    if ($hasil->num_rows() == 1) {
      foreach ($hasil->result() as $sess) {
        $sess_data['logged_in'] = 'Sudah Login';
        $sess_data['uid'] = $sess->uid;
        $sess_data['username'] = $sess->username;
        $sess_data['level'] = $sess->level;
        $sess_data['email'] = $sess->email;
        $sess_data['nama'] = $sess->nama;
        $sess_data['alamat'] = $sess->alamat;
        $sess_data['notelp'] = $sess->notelp;
        $sess_data['foto'] = $sess->foto;
        $sess_data['instagram'] = $sess->instagram;
        $this->session->set_userdata($sess_data);
      }
      if ($this->session->userdata('level')=='admin') {
        redirect('admin/DisplayProfil');
      }
      elseif ($this->session->userdata('level')=='member') {
        redirect('member/DisplayProfil/');
      }   
    }
    else {
      echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
    }
  }
  public function DisplayFormLogin()
  {
    // status user login = BENAR, pindah ke halaman absen
       $this->load->view('Form_Login');
  }

}

?>
 