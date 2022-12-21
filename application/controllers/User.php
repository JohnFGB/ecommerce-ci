<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{ 
    public function __construct()
    {
        Parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'G Portal | Home';
        $this->load->view('templates/user_header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/user_footer',$data);
    }
    public function ml()
    {
        $data['title'] = 'G Portal | Dashboard';
        $data['barang'] = $this->ModelBarang->tampilData()->result();
        $this->load->view('templates/user_header',$data);
        $this->load->view('kategori/ml');
        $this->load->view('templates/user_footer');
    }
    public function promo()
    {
        $data['title'] = 'G Portal | Promo';
        $this->load->view('templates/user_header',$data);
        $this->load->view('user/news1');
        $this->load->view('templates/user_footer');
    }
    public function sosmed()
    {
        $data['title'] = 'G Portal | Sosial Media';
        $this->load->view('templates/user_header',$data);
        $this->load->view('user/news1');
        $this->load->view('templates/user_footer');
    }
}
