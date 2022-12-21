<?php 

class Kategori extends CI_Controller
{
    public function mobileLegend()
    {
        $data['mobilelegend'] = $this->ModelKategori->mobileLegend()->result();
        $data['title'] = 'G Portal | Mobile Legend';
        $this->load->view('templates/user_header',$data);
        $this->load->view('kategori/mobilelegend',$data);
        $this->load->view('templates/user_footer');
    }
    public function pubg()
    {
        $data['pubg'] = $this->ModelKategori->pubg()->result();
        $data['title'] = 'G Portal | PUBG';
        $this->load->view('templates/user_header',$data);
        $this->load->view('kategori/pubg',$data);
        $this->load->view('templates/user_footer');
    }
    public function freeFire()
    {
        $data['freefire'] = $this->ModelKategori->freeFire()->result();
        $data['title'] = 'G Portal | Free Fire';
        $this->load->view('templates/user_header',$data);
        $this->load->view('kategori/freefire',$data);
        $this->load->view('templates/user_footer');
    }
}

?>