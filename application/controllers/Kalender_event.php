<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Kalender_Event extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('DB_Event');
        $this->tinyMce = '';
        $this->load->helper(array('form','url', 'text_helper','date'));
        $this->load->database();
        $this->load->library(array('Pagination','image_lib'));
        
    }

    public function index()
    {
        // status user login = BENAR, pindah ke halaman absen
        if ($this->session->userdata('username') == TRUE)
        {
            if ($this->session->userdata('level') == 'admin')
            {
                $data['query']=$this->DB_Event->Retrievelist();
                $this->load->view('admin/A_Tampilan_Kalender_Event', $data);
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $data['query']=$this->DB_Event->Retrievelist();
                $this->load->view('member/M_Tampilan_Kalender_Event', $data);
            }
        }
        else
        {
            $data['query']=$this->DB_Event->Retrievelist();
            $this->load->view('Tampilan_Kalender_Event',$data);
        }
    }
    

    public function getListJudul()
    {
        $data['query']=$this->DB_Event->RetrieveList();
        redirect('Kalender_Event/DisplayListJudul',$data);
    }
    public function DisplayListJudul()
    {
        if ($this->session->userdata('username') == TRUE)
        {
            if ($this->session->userdata('level') == 'admin')
            {
                $data['query']=$this->DB_Event->Retrievelist();
                $this->load->view('admin/A_Tampilan_Kalender_Event', $data);
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $data['query']=$this->DB_Event->Retrievelist();
                $this->load->view('member/M_Tampilan_Kalender_Event', $data);
            }
        }
        else
        {
            $data['query']=$this->DB_Event->Retrievelist();
            $this->load->view('Tampilan_Kalender_Event',$data);
        }
    }

    public function getIsi($id_event)
    {
        if ($this->session->userdata('username') == TRUE)
        {
            if ($this->session->userdata('level') == 'admin')
            {
                $data['query']=$this->DB_Event->RetrieveIsi($id_event);
                $this->load->view('admin/A_Detailedevent', $data);
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $data['query']=$this->DB_Event->RetrieveIsi($id_event);
                $this->load->view('member/M_Detailedevent', $data);
            }
        }
        else
        {
            $data['query']=$this->DB_Event->RetrieveIsi($id_event);
            $this->load->view('Detailedevent',$data);
        }
    }
    public function DisplayFormUpdate($id_event)
    {
        $data['query']=$this->DB_Event->ambilSatu($id_event);
        $this->load->view('admin/DisplayFormUpdateKalenderEvent',$data);
    }
    public function updateKalenderEvent($id_event)
    {
        $data['query']=$this->DB_Event->updateKalenderEvent($id_event);
        redirect('Kalender_Event/DisplayListJudul',$data);
    }
    public function DeleteData($id_event)
    {
        $data['query']=$this->DB_Event->DropData($id_event);
        redirect('Kalender_Event/DisplayListJudul',$data);
    }
    public function DisplayFormtambah()
    {
        if ($this->session->userdata('username') == TRUE)
        {
            $this->tinyMce = '';
            $data['query']=$this->DB_Event->Retrievelist();
            $this->load->view('admin/DisplayFormtambahKalenderEvent',$data);
            
        }
        else
        {
            $this->load->view('form_Login');
        }
    }
    public function submitKalenderEvent()
    {
        $jam = "%G:%i:%s";
        $time = time();
        $file=array(
        'uid'=>$this->session->userdata('uid'),
        'tanggal'=>date("Y-m-d"),
        'jam'=>mdate($jam,$time),
        'tanggal_event'=>$this->input->post('tanggal_event'),
        'jam_event'=>$this->input->post('jam_event'),
        'judul'=>$this->input->post('judul'),
        'isi'=>$this->input->post('content'),
        'nama_lokasi'=>$this->input->post('nama_lokasi'),
        'location'=>$this->input->post('location'),
        );
        $data['query']=$this->DB_Event->insertKalenderEvent($file);
        redirect('Kalender_Event/DisplayListJudul',$data);
    }
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */