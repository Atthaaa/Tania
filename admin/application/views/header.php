<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN MARKETPLACE</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
  <!-- Mmebuat navbar atau menu-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
    <div class="container">
      <a href="" class="navbar-brand">Admin</a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#naff">
        <span class="navbar-toggler-icon"> </span> </button>
      <div class="collapse navbar-collapse" id="naff">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a href="<?php echo base_url('home') ?>" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Hama_penyakit') ?>" class="nav-link">Hama Penyakit</a>
          </li><li class="nav-item">
            <a href="<?php echo base_url('Tips_budidaya') ?>" class="nav-link">Tips Budidaya</a>
          </li><li class="nav-item">
            <a href="<?php echo base_url('Layanan_keuangan') ?>" class="nav-link">Layanan Keuangan</a>
          </li><li class="nav-item">
            <a href="<?php echo base_url('Info_pasar') ?>" class="nav-link">Info Pasar</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Konsultasi') ?>" class="nav-link">Konsultasi</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Pengguna') ?>" class="nav-link">Member</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="<?php echo base_url('akun') ?>" class="nav-link">
              <?php echo $this->session->userdata('nama_admin') ?>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('logout') ?>" class="nav-link">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>