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

      <!-- End Cliens Section -->

<div class="container-fluid text-white">
    <h4 class="text-center">Keranjang Belanja</h4>

    <table class="table table-bordered table-stried table-hover text-white">
        <tr class="text-center text-white">
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Subtotal</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($this->cart->contents() as $items) :?>

            <tr class="text-center text-white">
                <td><?= $no++; ?></td>
                <td><?= $items['name']; ?></td>
                <td><?= $items['qty']; ?></td>
                <td>Rp. <?= number_format($items['price'], 0,',','.'); ?></td>
                <td>Rp. <?= number_format($items['subtotal'], 0,',','.'); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr class="text-center text-white">
            <td colspan="4">Total</td>
            <td>Rp. <?= number_format($this->cart->total(), 0,',','.'); ?></td>
        </tr>
    </table>
    <div align="right" style="color: white;">
        <a href="<?= base_url('dashboard/diamonds'); ?>"><div class="btn btn-sm btn-primary">Belanja lagi</div></a>
        <a href="<?= base_url('dashboard/deletecart'); ?>"><div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div></a>
        <a href="<?= base_url('dashboard/pembayaran'); ?>"><div class="btn btn-sm btn-success"><i class="fas fa-fw fa-money-bill"></i></div></a>
    </div>
</div>