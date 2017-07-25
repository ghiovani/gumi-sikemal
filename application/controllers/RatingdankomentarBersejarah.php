<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class RatingdanKomentarBersejarah extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('DB_Komentar');
        $this->tinyMce = '';
        $this->load->helper(array('form','url', 'text_helper','date'));
        $this->load->database();
        $this->load->library(array('Pagination','image_lib'));
        
    }

    public function index()
    {
        if ($this->session->userdata('username') == TRUE)
        {
            if ($this->session->userdata('level') == 'admin')
            {
                $data['komentar']=$this->DB_Komentar->RetrieveIsi($id_post);
                $this->load->view('admin/A_Detailedpost', $data);
            }
       
            elseif ($this->session->userdata('level') == 'member')
            {
                $data['komentar']=$this->DB_Komentar->RetrieveIsi($id_post);
                $this->load->view('member/M_Detailedpost', $data);
            }
        }
        else
        {
            $data['komentar']=$this->DB_Komentar->Retrieveisi($id_post);
            $this->load->view('Detailedpost',$data);
        }
    }


    public function lihatkomentar($id_post)
    {
                $data['komentar']=$this->DB_Komentar->RetrieveIsi($id_post);
                $this->load->view('member/M_komentar', $data);
    }
    public function getIsi()
    {
                $data['query']=$this->DB_Sejarah->RetrieveIsi('id_post');
                $this->load->view('member/M_Detailedpost_Bersejarah');
    }
    
    public function DeleteKomentar($id_post)
    {
        $data['komentar']=$this->DB_Komentar->DropData($id_post);
        redirect('RatingdanKomentar/getIsi',$data);
    }
    public function submitKomentar($id_post)
    {
        $jam = "%G:%i:%s";
        $time = time();
        $file=array(
        'uid'=>$this->session->userdata('uid'),
        'id_post'=>"$id_post",
        'tanggal'=>date("Y-m-d"),
        'jam'=>mdate($jam,$time),
        'isi_komentar'=>$this->input->post('komentar'),
        );
        $data['komentar']=$this->DB_Komentar->insertKomentar($file);
        redirect('RatingdanKomentarBersejarah/getIsi',$data); 
    }
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */