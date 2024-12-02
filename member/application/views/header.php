<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MEMBER MARKETPLACE</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Mmebuat navbar atau menu-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a href="" class="navbar-brand">Pengguna</a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#naff">
        <span class="navbar-toggler-icon"> </span> </button>
      <div class="collapse navbar-collapse text-center" id="naff">
        <ul class="navbar-nav mx-10">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Konten Informasi
              </a>
              <ul class="dropdown-menu bg-success">
                <li class="dropdown-item bg-success">
                <a href="<?php echo base_url('') ?>" class="nav-link">Home</a>
                </li>
                <li class="dropdown-item bg-success">
                  <a href="<?php echo base_url('hama_penyakit') ?>" class="nav-link">Hama Penyakit</a>
                </li>
                <li class="dropdown-item bg-success">
                  <a href="<?php echo base_url('layanan_keuangan') ?>" class="nav-link">Layanan Keuangan</a>
                </li>
                <li class="dropdown-item bg-success">
                  <a href="<?php echo base_url('tips_budidaya') ?>" class="nav-link">Tips Budidaya</a>
                </li>
                <li class="dropdown-item bg-success">
                  <a href="<?php echo base_url('info_pasar') ?>" class="nav-link">Info Pasar</a>
                </li>
              </ul>
            </li>
        </ul>
        <?php if ($this->session->userdata('id_member')) : ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Seller
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo base_url('seller/produk') ?>">Produk Saya</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('seller/transaksi') ?>">Penjualan Saya</a></li>
                <li><a href="<?php echo base_url('transaksi') ?>" class="dropdown-item">Pembelian Saya</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('akun') ?>" class="nav-link">
                <?php echo $this->session->userdata('nama_member') ?>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('logout') ?>" class="nav-link">Logout</a>
            </li>
          </ul>
        <?php endif; ?>

        <?php if (!$this->session->userdata('id_member')) : ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="#" data-bs-toggle="modal" data-bs-target="#login" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('register') ?>" class="nav-link">Register</a>
            </li>
          </ul>
        <?php endif; ?>

      </div>
    </div>
  </nav>