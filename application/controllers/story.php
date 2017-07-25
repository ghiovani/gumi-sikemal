<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Story extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('username')=="") {
      redirect('Login');
    }
    $this->load->helper('text');
    $this->load->model('DB_Story');
    $this->tinyMce = '';
    $this->load->helper(array('form','url', 'text_helper','date'));
    $this->load->database();
    $this->load->library(array('Pagination','image_lib'));
    
  }

  public function index()
  {
   $data['query']=$this->DB_Story->Retrievelist();
   $this->load->view('member/form_write_story', $data);
  }
  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');
    session_destroy();
    redirect('Login');
  }

  public function getListJudul()
    {
        $data['query']=$this->DB_Story->RetrieveList();
        redirect('Story/DisplayListJudul',$data);
    }
    public function Displayformwritestory()
    {
        if ($this->session->userdata('username') == TRUE)
        {
            $this->tinyMce = '';
            $data['query']=$this->DB_Story->Retrievelist();
            $this->load->view('member/form_write_story',$data);
            
        }
        // status login salah, tampilkan form login
        else
        {
            $this->load->view('form_registrasi');
        }
    }
    public function DisplayformEditWS($id_story)
    {
            $this->tinyMce = '';
            $data['query']=$this->DB_Story->ambilSatu($id_story);
            $this->load->view('member/form_edit_write_story',$data);
    
    }
    public function DisplayListJudul()
    {
        $data['query']=$this->DB_Story->Retrievelist();
        $this->load->view('member/form_write_story', $data);
    }

    public function getList()
    {
        if ($this->session->userdata('username') == TRUE)
        {
           redirect('Kalender_Event/DisplayListJudul');
        }
       
        else
        {
            $this->load->view('Tampilan_Kalender_Event');
        }
    }
    public function inputStory()
    {
        
        if($this->input->post('submit'))
        {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']    = '2048';
        $config['max_width']  = '2048';
        $config['max_height']  = '2048';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
        {
        $jam = "%G:%i:%s";
        $time = time();
        $file=array(
        'uid'=>$this->session->userdata('uid'),
        'tanggal'=>date("Y-m-d"),
        'jam'=>mdate($jam,$time),
        'judul'=>$this->input->post('judul'),
        'isi'=>$this->input->post('content'),
        'gambar'=>"favicon.PNG"
        );
        $data=$this->DB_Story->insertStory($file);
        $data = array('upload_data' => $this->upload->data());
        redirect('Story/Displayformwritestory', $data);
        
        }
        else
        {
        $data=$this->upload->data();
        $jam = "%G:%i:%s";
        $time = time();
        $file=array(
        'uid'=>$this->session->userdata('uid'),
        'tanggal'=>date("Y-m-d"),
        'jam'=>mdate($jam,$time),
        'judul'=>$this->input->post('judul'),
        'isi'=>$this->input->post('content'),
        'gambar'=>$data['file_name']
        );
        $data=$this->DB_Story->insertStory($file);
        $data = array('upload_data' => $this->upload->data());
       redirect('Story/Displayformwritestory', $data);
        }
        }
        else
        {
        redirect(site_url('member/DisplayProfil'));
        }
    }
    public function updateStory($id_story)
    {
        
        if($this->input->post('submit'))
        {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']    = '2048';
        $config['max_width']  = '2048';
        $config['max_height']  = '2048';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
        {
        $jam = "%G:%i:%s";
        $time = time();
        $file=array(
        'uid'=>$this->session->userdata('uid'),
        'tanggal'=>date("Y-m-d"),
        'jam'=>mdate($jam,$time),
        'judul'=>$this->input->post('judul'),
        'isi'=>$this->input->post('content'),
        'gambar'=>"favicon.PNG"
        );
        $data=$this->DB_Story->updateStory($file,$id_story);
        $data = array('upload_data' => $this->upload->data());
        redirect('Story/Displayformwritestory', $data);
        
        }
        else
        {
        $data=$this->upload->data();
        $jam = "%G:%i:%s";
        $time = time();
        $file=array(
        'uid'=>$this->session->userdata('uid'),
        'tanggal'=>date("Y-m-d"),
        'jam'=>mdate($jam,$time),
        'judul'=>$this->input->post('judul'),
        'isi'=>$this->input->post('content'),
        'gambar'=>$data['file_name']
        );
        $data=$this->DB_Story->updateStory($file,$id_story);
        $data = array('upload_data' => $this->upload->data());
       redirect('Story/Displayformwritestory', $data);
        }
        }
        else
        {
        redirect(site_url('member/DisplayProfil'));
        }
    }
    public function getIsi($id_story)
    {
        $data['query']=$this->DB_Story->RetrieveIsi($id_story);
        $this->load->view('member/M_DetailedStory', $data);
    }
    public function DeleteStory($id_story)
    {
        
        $data['query']=$this->DB_Story->DropData($id_story);
        redirect('Story/DisplayListJudul',$data);
    }

}
   

/* End of file login.php */
/* Location: ./application/controllers/login.php */