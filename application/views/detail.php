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



<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Detail Produk
        </div>
        <div class="card-body">
            <?php foreach($barang as $brg) : ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= base_url('img/'). $brg->gambar; ?>" alt="" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?= $brg->nama_barang; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Deskripsi Produk</td>
                            <td><strong><?= $brg->deskripsi; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Kategori Produk</td>
                            <td><strong><?= $brg->kategori; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><strong><?= $brg->stok; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><strong><div class="btn btn-sm  btn-success">Rp. <?= number_format($brg->harga,0,',','.'); ?></div></strong></td>
                        </tr>
                    </table>
                    <?= anchor('dashboard', '<div class="btn btn-sm btn-success">Back</div>'); ?>
                    <?= anchor('dashboard/addtocart/' .$brg->id, '<div class="btn btn-sm btn-primary">Add to cart</div>'); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>