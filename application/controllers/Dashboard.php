<?php 

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'G Portal | Home';
        $this->load->view('templates/user_header',$data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/user_footer');
    }
    public function diamonds()
    {
        $data['barang'] = $this->ModelBarang->tampilData()->result();
        $data['title'] = 'G Portal | Diamonds';
        $this->load->view('templates/user_header',$data);
        $this->load->view('user/databarang', $data);
        $this->load->view('templates/user_footer');
    }
    public function addToCart($id)
    {
        $barang = $this->ModelBarang->find($id);
        
        $data = array(
            'id' => $barang->id,
            'qty' => 1,
            'price' => $barang->harga,
            'name' => $barang->nama_barang
        );
        $this->cart->insert($data);
        redirect('dashboard/detailcart');
    }
    public function detailCart()
    {
        $data['title'] = 'G Portal | Pesanan';
        $this->load->view('templates/user_header',$data);
        $this->load->view('cart');
        $this->load->view('templates/user_footer');
    }
    public function deleteCart()
    {
        $this->cart->destroy();
        redirect('dashboard');
    }
    public function pembayaran()
    {
        $data['title'] = 'G Portal | Pembayaran';
        $this->load->view('templates/user_header', $data);
        $this->load->view('pembayaran');
        $this->load->view('templates/user_footer');
    }
    public function prosesPesanan()
    {
        $proccess = $this->ModelInvoice->index();
        if ($proccess) {
            $this->load->view('templates/user_header');

            $this->load->view('prosespesanan');
            $this->load->view('templates/user_footer');
            $this->cart->destroy();
        } else {
            echo "Maaf pesanan anda gagal di proses";
        }

    }
    public function detail($id_barang)
    {
        $data['barang'] = $this->ModelBarang->detailBarang($id_barang);
        $data['title'] = 'G Portal | Detail Barang';
        $this->load->view('templates/user_header',$data);
        $this->load->view('detail', $data);
        $this->load->view('templates/user_footer');
    }

}

?>