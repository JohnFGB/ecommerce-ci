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
            <li><a class="nav-link scrollto" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="<?= base_url('dashboard/tampildata'); ?>">Topup</a></li>
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
    <div class="alert alert-success">
        <p class="text-center align-middle">Pesanan anda sedang kami proses.Mohon kirim bukti pembayaran ke nomor whatsapp : 0812412591239</p>
    </div>
    <a href="<?= base_url('dashboard'); ?>" class="btn btn-primary" style="display: flex; justify-content: center;">Belanja lagi</a>
</div>
