<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Member extends CI_Controller
{
   public $data = array('pesan'=> '');
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
   
    $this->load->model('DB_User');

   $uid['uid'] = $this->session->userdata('uid');
   $data['query']=$this->DB_User->RetrieveDataProfil($uid);
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
    
    $this->load->view('member/Profil', $data);
  }
  public function DisplayformEditProfil($uid)
  {
    $this->load->model('DB_User');
      $data['query']=$this->DB_User->getData($uid);
      $this->load->view('member/form_edit_profil',$data);
    
  }
  public function EditProfil($uid)
  {
    $this->load->model('DB_User');
      if($this->input->post('edit'))
      {
      $config['upload_path'] = './assets/img/member/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']    = '2048';
      $config['max_width']  = '2048';
      $config['max_height']  = '2048';
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload())
      {
          $file=array(
          'username'=>$this->input->post('username'),
          'password'=>md5($this->input->post('password')),
          'email'=>$this->input->post('email'),
          'nama'=>$this->input->post('nama'),
          'alamat'=>$this->input->post('alamat'),
          'notelp'=>$this->input->post('notelp'),
          'instagram'=>$this->input->post('instagram'),
          'foto'=>"profpic.PNG"
          );
          $data=$this->DB_User->updateProfil($file, $uid);
          $data = array('upload_data' => $this->upload->data());
          redirect('Member/DisplayProfil', $data);
      }
      else
      {
          $data=$this->upload->data();
          $file=array(
          'username'=>$this->input->post('username'),
          'password'=>md5($this->input->post('password')),
          'email'=>$this->input->post('email'),
          'nama'=>$this->input->post('nama'),
          'alamat'=>$this->input->post('alamat'),
          'notelp'=>$this->input->post('notelp'),
          'instagram'=>$this->input->post('instagram'),
          'foto'=>$data['file_name']
          );
          $data=$this->DB_User->updateProfil($file,$uid);
          $data = array('upload_data' => $this->upload->data());
          redirect('Member/DisplayProfil', $data);
      }
      }
      else
      {
          redirect(site_url('member/DisplayProfil'));
      }
          
    
  }
  
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */