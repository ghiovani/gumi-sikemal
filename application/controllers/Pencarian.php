<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Pencarian extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->tinyMce = '';
        $this->load->helper(array('form','url', 'text_helper','date'));
        $this->load->database();
        $this->load->library(array('Pagination','image_lib'));
    }
    public function index()
    {
        $this->load->model('DB_Search');
        if ($this->session->userdata('username') == TRUE)
        {
            if ($this->session->userdata('level') == 'admin')
            {
                $data['query']=$this->DB_Search->RetrieveData();
                $this->load->view('admin/A_Hasil_Pencarian', $data);
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $data['query']=$this->DB_Search->RetrieveData();
                $this->load->view('member/M_Hasil_Pencarian', $data);
            }
        }
        else
        {
            $data['query']=$this->DB_Search->RetrieveData();
            $this->load->view('Hasil_Pencarian',$data);
        }
    }
    public function Cari()
    {
        $this->load->model('DB_Search');
        if ($this->session->userdata('username') == TRUE)
        {
            if ($this->session->userdata('level') == 'admin')
            {
                $keyword=$this->input->post('keyword');
                $data['query']=$this->DB_Search->RetrieveData($keyword);
                $this->load->view('admin/A_Hasil_Pencarian', $data);
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $keyword=$this->input->post('keyword');
                $data['query']=$this->DB_Search->RetrieveData($keyword);
                $this->load->view('member/M_Hasil_Pencarian', $data);
            }
        }
        else
        {
            $keyword=$this->input->post('keyword');
            $data['query']=$this->DB_Search->RetrieveData($keyword);
            $this->load->view('Hasil_Pencarian',$data);
        }
    }
    public function getIsi($id_post)
    {
        if ($this->session->userdata('username') == TRUE)
        {
            if ($this->session->userdata('level') == 'admin')
            {
                $this->load->model('DB_Search');
                $data['query']=$this->DB_Search->RetrieveIsi($id_post);
                $this->load->model('DB_Rating_Komentar');
                $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsi($id_post);
                $this->load->view('admin/A_Detailedpost_Search', $data);
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $this->load->model('DB_Search');
                $data['query']=$this->DB_Search->RetrieveIsi($id_post);
                $this->load->model('DB_Rating_Komentar');
                $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsi($id_post);
                $this->load->view('member/M_Detailedpost_Search',$data);
            }
        }
        else
        {
                $this->load->model('DB_Search');
                $data['query']=$this->DB_Search->RetrieveIsi($id_post);
                // $this->load->model('DB_Rating_Komentar');
                // $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsiLimit($id_post);
                $this->load->view('Detailedpost',$data);
        }
    }
    public function submitKomentar($id_post)
    {
        $this->load->model('DB_Rating_Komentar');
        $jam = "%G:%i:%s";
        $time = time();
        $file=array(
        'uid'=>$this->session->userdata('uid'),
        'id_post'=>"$id_post",
        'tanggal'=>date("Y-m-d"),
        'jam'=>mdate($jam,$time),
        'isi_komentar'=>$this->input->post('komentar'),
        );
        $data['komentar']=$this->DB_Rating_Komentar->insertKomentar($file);
        redirect(site_url('Pencarian/getIsi/'.$id_post));
        // if ($this->session->userdata('level') == 'admin')
        //     {
        //         $this->load->model('DB_Search');
        //         $data['query']=$this->DB_Search->RetrieveIsi($id_post);
        //         $this->load->model('DB_Rating_Komentar');
        //         $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsi($id_post);
        //         $this->load->view('admin/A_Detailedpost_bersejarah', $data);
        //     }
       
        //     elseif ($this->session->userdata('level') == 'member')
        //     {
        //         $this->load->model('DB_Search');
        //         $data['query']=$this->DB_Search->RetrieveIsi($id_post);
        //         $this->load->model('DB_Rating_Komentar');
        //         $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsi($id_post);
        //         $this->load->view('member/M_Detailedpost_bersejarah',$data);
        //     }
               
    }
    public function DisplayFormUpdate($id_post)
    {
        $this->load->model('DB_Search');
        $data['query']=$this->DB_Search->ambilSatu($id_post);
        $this->load->view('admin/DisplayFormUpdateSearch',$data);
    }
    public function updateInformasiSearch($id_post)
    {
        $this->load->model('DB_Search');
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
                $data['query']=$this->DB_Search->updateInformasiSearch($file,$id_post);
                $data['query'] = array('upload_data' => $this->upload->data());
                redirect('Pencarian/cari', $data);
                
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
                $data['query']=$this->DB_Search->updateInformasiSearch($file,$id_post);
                $data['query'] = array('upload_data' => $this->upload->data());
                redirect('Pencarian/cari', $data);
            }
        }
        else
        {
        redirect(site_url('Pencarian/DisplayFormUpdate'));
        }
    }
    public function DeleteData($id_post)
    {
        $this->load->model('DB_Search');
        $data['query']=$this->DB_Search->DropData($id_post);
        redirect('Pencarian/Cari',$data);
    }
}