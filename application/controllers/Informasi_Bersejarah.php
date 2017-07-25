<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Informasi_Bersejarah extends CI_Controller
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
        $this->load->model('DB_Sejarah');
        if ($this->session->userdata('username') == TRUE)
        {
            if ($this->session->userdata('level') == 'admin')
            {
                $data['query']=$this->DB_Sejarah->Retrievelist();
                $this->load->view('admin/A_Tampilan_Informasi_Bersejarah', $data);
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $data['query']=$this->DB_Sejarah->Retrievelist();
                $this->load->view('member/M_Tampilan_Informasi_Bersejarah', $data);
            }
        }
        else
        {
            $data['query']=$this->DB_Sejarah->Retrievelist();
            $this->load->view('Tampilan_Informasi_Bersejarah',$data);
        }
    }
    public function getListJudul()
    {
        $this->load->model('DB_Sejarah');
        $data['query']=$this->DB_Sejarah->RetrieveList();
        redirect('Informasi_Bersejarah/DisplayListJudul', $data);
    }
    public function DisplayListJudul()
    {
        $this->load->model('DB_Sejarah');
        if ($this->session->userdata('username') == TRUE)
        {
            if ($this->session->userdata('level') == 'admin')
            {
                $data['query']=$this->DB_Sejarah->Retrievelist();
                $this->load->view('admin/A_Tampilan_Informasi_Bersejarah', $data);
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $data['query']=$this->DB_Sejarah->Retrievelist();
                $this->load->view('member/M_Tampilan_Informasi_Bersejarah', $data);
            }
        }
        else
        {
            $data['query']=$this->DB_Sejarah->Retrievelist();
            $this->load->view('Tampilan_Informasi_Bersejarah',$data);
        }
    }
    public function getIsi($id_post)
    {
        if ($this->session->userdata('username') == TRUE)
        {
            if ($this->session->userdata('level') == 'admin')
            {
                $this->load->model('DB_Sejarah');
                $data['query']=$this->DB_Sejarah->RetrieveIsi($id_post);
                $this->load->model('DB_Rating_Komentar');
                $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsi($id_post);
                $this->load->view('admin/A_Detailedpost_bersejarah', $data);
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $this->load->model('DB_Sejarah');
                $data['query']=$this->DB_Sejarah->RetrieveIsi($id_post);
                $this->load->model('DB_Rating_Komentar');
                $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsi($id_post);
                $this->load->view('member/M_Detailedpost_bersejarah',$data);
            }
        }
        else
        {
                $this->load->model('DB_Sejarah');
                $data['query']=$this->DB_Sejarah->RetrieveIsi($id_post);
                // $this->load->model('DB_Rating_Komentar');
                // $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsiLimit($id_post);
                $this->load->view('Detailedpost',$data);
        }
    }
    public function DisplayFormUpdate($id_post)
    {
        $this->load->model('DB_Sejarah');
        $data['query']=$this->DB_Sejarah->ambilSatu($id_post);
        $this->load->view('admin/DisplayFormUpdateSejarah',$data);
    }
    public function updateInformasiBersejarah($id_post)
    {
        $this->load->model('DB_Sejarah');
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
                    'kategori'=>"sejarah",
                    'isi'=>$this->input->post('content')
                    // 'gambar'=>"favicon.PNG"
                );
                $data['query']=$this->DB_Sejarah->updateInformasiBersejarah($file,$id_post);
                $data['query'] = array('upload_data' => $this->upload->data());
                redirect('Informasi_Bersejarah/DisplayListJudul', $data);
                
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
                    'kategori'=>"sejarah",
                    'isi'=>$this->input->post('content'),
                    'gambar'=>$data['file_name']
                );
                $data['query']=$this->DB_Sejarah->updateInformasiBersejarah($file,$id_post);
                $data['query'] = array('upload_data' => $this->upload->data());
                redirect('Informasi_Bersejarah/DisplayListJudul', $data);
            }
        }
        else
        {
        redirect(site_url('Informasi_Bersejarah/DisplayFormUpdate'));
        }
    }
    public function DeleteData($id_post)
    {
        $this->load->model('DB_Sejarah');
        $data['query']=$this->DB_Sejarah->DropData($id_post);
        redirect('Informasi_Bersejarah/DisplayListJudul',$data);
    }
    public function DisplayFormtambah()
    {
        $this->load->model('DB_Sejarah');
        if ($this->session->userdata('username') == TRUE)
        {
            $this->tinyMce = '';
            $data['query']=$this->DB_Sejarah->Retrievelist();
            $this->load->view('admin/DisplayFormtambahSejarah',$data);
            
        }
        else
        {
            $this->load->view('form_Login');
        }
    }

    public function submitInformasiBersejarah()
    {
        
        $this->load->model('DB_Sejarah');
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
        'kategori'=>"sejarah",
        'isi'=>$this->input->post('content')
        // 'gambar'=>"favicon.PNG"
        );
        $data['query']=$this->DB_Sejarah->insertInformasiBersejarah($file);
        $data['query'] = array('upload_data' => $this->upload->data());
        redirect('Informasi_Bersejarah/DisplayListJudul', $data);
        
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
        'kategori'=>"sejarah",
        'isi'=>$this->input->post('content'),
        'gambar'=>$data['file_name']
        );
        $data['query']=$this->DB_Sejarah->insertInformasiBersejarah($file);
        $data['query'] = array('upload_data' => $this->upload->data());
        redirect('Informasi_Bersejarah/DisplayListJudul', $data);
        }
        }
        else
        {
        redirect(site_url('Informasi_Bersejarah/DisplayFormtambah'));
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
        redirect(site_url('Informasi_Bersejarah/getIsi/'.$id_post));
        // if ($this->session->userdata('level') == 'admin')
        //     {
        //         $this->load->model('DB_Sejarah');
        //         $data['query']=$this->DB_Sejarah->RetrieveIsi($id_post);
        //         $this->load->model('DB_Rating_Komentar');
        //         $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsi($id_post);
        //         $this->load->view('admin/A_Detailedpost_bersejarah', $data);
        //     }
       
        //     elseif ($this->session->userdata('level') == 'member')
        //     {
        //         $this->load->model('DB_Sejarah');
        //         $data['query']=$this->DB_Sejarah->RetrieveIsi($id_post);
        //         $this->load->model('DB_Rating_Komentar');
        //         $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsi($id_post);
        //         $this->load->view('member/M_Detailedpost_bersejarah',$data);
        //     }
               
    }
    // public function lihatkomentar($id_post)
    // {
    //     $this->load->model('DB_Rating_Komentar');

    //     $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsi($id_post);
    //     $this->load->view('member/M_komentar', $data);
    // }
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */