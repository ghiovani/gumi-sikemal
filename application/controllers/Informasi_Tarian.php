<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Informasi_Tarian extends CI_Controller
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
        $this->load->model('DB_Tarian');
        if ($this->session->userdata('username') == TRUE)
        {
            if ($this->session->userdata('level') == 'admin')
            {
                $data['query']=$this->DB_Tarian->Retrievelist();
                $this->load->view('admin/A_Tampilan_Informasi_Tarian', $data);
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $data['query']=$this->DB_Tarian->Retrievelist();
                $this->load->view('member/M_Tampilan_Informasi_Tarian', $data);
            }
        }
        else
        {
            $data['query']=$this->DB_Tarian->Retrievelist();
            $this->load->view('Tampilan_Informasi_Tarian',$data);
        }
    }
    public function getListJudul()
    {
        $this->load->model('DB_Tarian');
        $data['query']=$this->DB_Tarian->RetrieveList();
        redirect('Informasi_Tarian/DisplayListJudul',$data);
    }
    public function DisplayListJudul()
    {
        $this->load->model('DB_Tarian');
        if ($this->session->userdata('username') == TRUE)
        {
            if ($this->session->userdata('level') == 'admin')
            {
                $data['query']=$this->DB_Tarian->Retrievelist();
                $this->load->view('admin/A_Tampilan_Informasi_Tarian', $data);
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $data['query']=$this->DB_Tarian->Retrievelist();
                $this->load->view('member/M_Tampilan_Informasi_Tarian', $data);
            }
        }
        else
        {
            $data['query']=$this->DB_Tarian->Retrievelist();
            $this->load->view('Tampilan_Informasi_Tarian',$data);
        }
    }
    public function getIsi($id_post)
    {
        if ($this->session->userdata('username') == TRUE)
        {
            if ($this->session->userdata('level') == 'admin')
            {
                $this->load->model('DB_Tarian');
                $data['query']=$this->DB_Tarian->RetrieveIsi($id_post);
                $this->load->model('DB_Rating_Komentar');
                $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsi($id_post);
                $this->load->view('admin/A_Detailedpost_Tarian', $data );
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $this->load->model('DB_Tarian');
                $data['query']=$this->DB_Tarian->RetrieveIsi($id_post);
                $this->load->model('DB_Rating_Komentar');
                $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsi($id_post);
                $this->load->view('member/M_Detailedpost_Tarian', $data );
            }
        }
        else
        {
            $this->load->model('DB_Tarian');
            $data['query']=$this->DB_Tarian->RetrieveIsi($id_post);
            // $this->load->model('DB_Rating_Komentar');
            // $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsi($id_post);
            $this->load->view('Detailedpost',$data);
        }
    }
    public function DisplayFormUpdate($id_post)
    {
        $this->load->model('DB_Tarian');
        $data['query']=$this->DB_Tarian->ambilSatu($id_post);
        $this->load->view('admin/DisplayFormUpdateTarian',$data);
    }
    public function updateInformasiTarian($id_post)
    {
        $this->load->model('DB_Tarian');
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
                    'kategori'=>"tarian",
                    'isi'=>$this->input->post('content'),
                    'gambar'=>"favicon.PNG"
                );
                $data['query']=$this->DB_Tarian->updateInformasiTarian($file,$id_post);
                $data['query'] = array('upload_data' => $this->upload->data());
                redirect('Informasi_Tarian/DisplayListJudul', $data);
                
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
                    'kategori'=>"tarian",
                    'isi'=>$this->input->post('content'),
                    'gambar'=>$data['file_name']
                );
                $data['query']=$this->DB_Tarian->updateInformasiTarian($file,$id_post);
                $data['query'] = array('upload_data' => $this->upload->data());
                redirect('Informasi_Tarian/DisplayListJudul', $data);
            }
        }
        else
        {
        redirect(site_url('Informasi_Tarian/DisplayFormUpdate'));
        }
    }
    public function DeleteData($id_post)
    {
        $this->load->model('DB_Tarian');
        $data['query']=$this->DB_Tarian->DropData($id_post);
        redirect('Informasi_Tarian/DisplayListJudul',$data);
    }
    public function DisplayFormtambah()
    {
        $this->load->model('DB_Tarian');
        if ($this->session->userdata('username') == TRUE)
        {
            $this->tinyMce = '';
            $data['query']=$this->DB_Tarian->Retrievelist();
            $this->load->view('admin/DisplayFormtambahtarian',$data);
        }
        else
        {
            $this->load->view('form_Login');
        }
    }
    public function submitInformasiTarian()
    {
        $this->load->model('DB_Tarian');
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
        'kategori'=>"tarian",
        'isi'=>$this->input->post('content'),
        'gambar'=>"favicon.PNG"
        );
        $data['query']=$this->DB_Tarian->insertInformasiTarian($file);
        $data['query'] = array('upload_data' => $this->upload->data());
        redirect('Informasi_Tarian/DisplayListJudul', $data);
        
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
        'kategori'=>"tarian",
        'isi'=>$this->input->post('content'),
        'gambar'=>$data['file_name']
        );
        $data['query']=$this->DB_Tarian->insertInformasiTarian($file);
        $data['query'] = array('upload_data' => $this->upload->data());
        redirect('Informasi_Tarian/DisplayListJudul', $data);
        }
        }
        else
        {
        redirect(site_url('Informasi_Tarian/DisplayFormtambah'));
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
        redirect(site_url('Informasi_Tarian/getIsi/'.$id_post));

        // if ($this->session->userdata('level') == 'admin')
        //     {
        //         $this->load->model('DB_Tarian');
        //         $data['query']=$this->DB_Tarian->RetrieveIsi($id_post);
        //         $this->load->model('DB_Rating_Komentar');
        //         $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsi($id_post);
        //         $this->load->view('admin/A_Detailedpost_Tarian', $data );
        //     }
       
        //     elseif ($this->session->userdata('level') == 'member')
        //     {
        //         $this->load->model('DB_Tarian');
        //         $data['query']=$this->DB_Tarian->RetrieveIsi($id_post);
        //         $this->load->model('DB_Rating_Komentar');
        //         $data['komentar']=$this->DB_Rating_Komentar->RetrieveIsi($id_post);
        //         $this->load->view('member/M_Detailedpost_Tarian', $data );
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