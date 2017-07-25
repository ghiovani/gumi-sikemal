<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Admin extends CI_Controller
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
   $data['username'] = $this->session->userdata('username');
   $this->load->view('member/Profil', $data);
  }
  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');
    session_destroy();
    redirect('Login');
  }

  public function DisplayProfil()
  {
    $this->load->model('DB_User');
    $uid['uid'] = $this->session->userdata('uid');
    $data['query']=$this->DB_User->RetrieveDataProfil($uid);
    $this->load->model('DB_User');
    $data['query']=$this->DB_User->RetrieveDataProfil($uid);
    $this->load->model('DB_Tarian');
    $data['tarian']=$this->DB_Tarian->RetrieveList();
    $this->load->model('DB_Kuliner');
    $data['kuliner']=$this->DB_Kuliner->RetrieveList();
    $this->load->model('DB_Sejarah');
    $data['sejarah']=$this->DB_Sejarah->RetrieveList();
    
    $this->load->view('admin/Profil', $data);
  }
  // public function DisplayformEditProfil($uid)
  // {
  //   $this->load->model('DB_User');
  //     $data['query']=$this->DB_User->getData($uid);
  //     $this->load->view('admin/form_edit_profil',$data);
    
  // }
  public function EditProfil($uid)
  {
    $this->load->model('DB_User');
      $data['query']=$this->DB_User->updateprofil($uid);
      redirect('admin/DisplayProfil');
          
    
  }
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */