<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Logout extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('username')=="") {
      redirect('Login');
    }
    $this->load->helper('text');
  }

  public function index()
  {
    // status user login = BENAR, pindah ke halaman absen
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');
    session_destroy();
    redirect('Login');
  }
   public function logout()
  {
    // status user login = BENAR, pindah ke halaman absen
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');
    session_destroy();
    redirect('Login/displayformlogin');
  }
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */