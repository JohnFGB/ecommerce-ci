<header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <h1 class="logo me-auto">
          <a href="index.html">
            <img src="<?= base_url('components'); ?>/img/logo-gportal.png" alt="" />
          </a>
        </h1>
        <!-- Ini Logo Gportal -->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#topup">Topup</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#news">News</a></li>
            <li><a class="getstarted scrollto" href="<?= base_url('auth/logout'); ?>">Logout</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->
<section></section>

<div class="container-fluid text-white">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-success disabled" style="display: flex; justify-content: center;">
                <?php 
                    $total = 0;
                    if ($cart = $this->cart->contents()) {
                        foreach ($cart as $item) {
                            $total = $total + $item['subtotal'];
                        }
                        echo "Total Belanja Anda : Rp. ". number_format($total,0,',','.');
                    
                ?>
            </div>
            <br>
            <h3 class="text-center">Pembayaran</h3>
            <form action="<?= base_url('dashboard/prosespesanan'); ?>" method="post">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama"  placeholder="Nama Lengkap" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>ID Game</label>
                        <input type="text" name="idgame"  placeholder="ID Game" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>ID Game</label>
                        <input type="text" name="idserver"  placeholder="ID Server" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Metode Pembayaran</label>
                        <select name="" id="" class="form-control" required>
                            <option value="">Pilih Pembayaran</option>
                            <option value="">BCA - 231564978</option>
                            <option value="">GOPAY - 0812341235678</option>
                            <option value="">OVO - 0812341235678</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Pesan</button>
                    <br>
            <br>
            <a href="<?= base_url('user/ml'); ?>" class="btn btn-primary">Belanja lagi</a>

            </form>
            <?php } else {
                echo "<a href='../dashboard'  style='display: flex; justify-content: center; text-decoration: none; color: white;'>Keranjang belanja anda masih kosong</a>";
                echo "<br>";
            }?>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>