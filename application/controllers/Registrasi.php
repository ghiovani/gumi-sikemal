<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registrasi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
$this->load->model('DB_User');
  }

  public function index()
  {
    // status user login = BENAR, pindah ke halaman absen
       $this->load->view('Form_Registrasi',array('error' => ' '));
  }
  public function inputData() {
      if($this->input->post('upload'))
      {
          $session=isset($_SESSION['username']) ? $_SESSION['username']:'';
          if($session!=""){
              echo "<meta http-equiv='refresh' content='0; url=".base_url()."member/'>";
          }else{
            $q = $this->DB_User->cek_username($this->input->post('username'),$this->input->post('email'));
            if (count($q->result())>0){
              echo "<script>alert('Gagal daftar: Username dan email sudah terdaftar!');history.go(-1);</script>";
            }
            else{
      
                $file=array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'level' => "member",
                'email' => $this->input->post('email'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'notelp' => $this->input->post('notelp'),
                'foto'=>"profpic.PNG",
                'instagram' => $this->input->post('instagram')
                );
                
                $this->DB_User->insertData($file);
                 echo "<script>alert('Anda Sudah Terdaftar, Silahkan Login!');</script>";
                redirect('member/displayProfil');

            }
          }
      }
      else
      {
          redirect(site_url('registrasi'));
      }
    
    }

  public function DisplayFormRegistrasi()
  {
    // status user login = BENAR, pindah ke halaman absen
       $this->load->view('Form_Registrasi');
  }
function thumb($data)
{
$config['image_library'] = 'gd2';
$config['source_image'] =$data['full_path'];
$config['create_thumb'] = TRUE;
$config['maintain_ratio'] = TRUE;
$config['width'] = 275;
$config['height'] = 250;
$this->load->library('image_lib', $config);
$this->image_lib->resize();
}
}

?>
 