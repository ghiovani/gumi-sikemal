<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Lokasi_Budaya extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('DB_Lokasi_Budaya');
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
                $data['query']=$this->DB_Lokasi_Budaya->Retrievelist();
                $this->load->view('admin/A_Tampilan_Lokasi_Budaya', $data);
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $data['query']=$this->DB_Lokasi_Budaya->Retrievelist();
                $this->load->view('member/M_Tampilan_Lokasi_Budaya', $data);
            }
        }
        else
        {
            $data['query']=$this->DB_Lokasi_Budaya->Retrievelist();
            $this->load->view('Tampilan_Lokasi_Budaya',$data);
        }    }
    

    public function getListLokasi()
    {
        $data['query']=$this->DB_Lokasi_Budaya->RetrieveList();
        
        redirect('Lokasi_Budaya/DisplayListLokasi',$data);
    }
    public function DisplayListLokasi()
    {
        if ($this->session->userdata('username') == TRUE)
        {
            if ($this->session->userdata('level') == 'admin')
            {
                $data['query']=$this->DB_Lokasi_Budaya->Retrievelist();
                $this->load->view('admin/A_Tampilan_Lokasi_Budaya', $data);
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $data['query']=$this->DB_Lokasi_Budaya->Retrievelist();
                $this->load->view('member/M_Tampilan_Lokasi_Budaya', $data);
            }
        }
        else
        {
            $data['query']=$this->DB_Lokasi_Budaya->Retrievelist();
            $this->load->view('Tampilan_Lokasi_Budaya',$data);
        }
    }

    public function getList()
    {
        if ($this->session->userdata('username') == TRUE)
        {
            $this->load->view('member/M_Tampilan_Lokasi_Budaya');
        }
        // status login salah, tampilkan form login
        else
        {// $data['tipe'] = $this->DB_Lokasi_Budaya->LoadList();
            $this->load->view('Tampilan_Lokasi_Budaya');
        }
    }
    public function getIsi($id_loc)
    {
        $data['query']=$this->DB_Lokasi_Budaya->RetrieveIsi($id_loc);
        $this->load->view('admin/A_DetailedLocation', $data);
    }
    public function DisplayFormUpdate($id_loc)
    {
        $data['query']=$this->DB_Lokasi_Budaya->ambilSatu($id_loc);
        $this->load->view('admin/DisplayFormUpdateLokasiBudaya',$data);
    }
    public function updateLokasiBudaya($id_loc)
    {
        $data['query']=$this->DB_Lokasi_Budaya->updateLokasiBudaya($id_loc);
        redirect('Lokasi_Budaya/DisplayLokasiBudaya',$data);
    }
    public function DeleteData($id_loc)
    {
        $data['query']=$this->DB_Lokasi_Budaya->DropData($id_loc);
        redirect('Lokasi_Budaya/DisplayListLokasi',$data);
    }
    public function DisplayFormtambah()
    {
        if ($this->session->userdata('username') == TRUE)
        {
            $this->tinyMce = '';
            $data['query']=$this->DB_Lokasi_Budaya->Retrievelist();
            $this->load->view('admin/DisplayFormtambahlokasibudaya',$data);
            
        }
        else
        {
            $this->load->view('form_Login');
        }
    }
    public function submitLokasiBudaya()
    {
        $jam = "%G:%i:%s";
        $time = time();
        $file=array(
        'uid'=>$this->session->userdata('uid'),
        'nama_lokasi'=>$this->input->post('nama_lokasi'),
        'location'=>$this->input->post('location'),
        );
        $data['query']=$this->DB_Lokasi_Budaya->insertLokasiBudaya($file);
        redirect('Lokasi_Budaya/DisplayLokasiBudaya',$data);
    }
    
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */