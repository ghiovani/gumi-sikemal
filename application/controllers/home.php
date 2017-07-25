<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct(){
      parent::__construct();
    }

    public function index(){
         $this->load->view('home');
    }
    public function home(){
         $this->load->view('home');
    }

}
/* End of file login.php */
/* Location: ./application/controllers/login.php */