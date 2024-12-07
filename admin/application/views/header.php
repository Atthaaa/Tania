<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Tania</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
  <!-- Mmebuat navbar atau menu-->
  <nav class="navbar navbar-expand-lg navbar-dark mb-4" style="background-color: white; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); height: 75px;">
    <div class="container">
      <img src="../assets/logo_tania.png" style="height: 30px; margin-right: 170px;">
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#naff">
        <span class="navbar-toggler-icon"> </span> </button>
      <div class="collapse navbar-collapse" id="naff">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a href="<?php echo base_url('home') ?>" class="nav-link" style="color: black;" >Home</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Hama_penyakit') ?>" class="nav-link" style="color: black;">Hama Penyakit</a>
          </li><li class="nav-item">
            <a href="<?php echo base_url('Tips_budidaya') ?>" class="nav-link" style="color: black;">Tips Budidaya</a>
          </li><li class="nav-item">
            <a href="<?php echo base_url('Layanan_keuangan') ?>" class="nav-link" style="color: black;">Layanan Keuangan</a>
          </li><li class="nav-item">
            <a href="<?php echo base_url('Info_pasar') ?>" class="nav-link" style="color: black;">Info Pasar</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Konsultasi') ?>" class="nav-link" style="color: black;">Konsultasi</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Pengguna') ?>" class="nav-link" style="color: black;">Member</a>
          </li>
        </ul>
        <?php if ($this->session->userdata('id_admin')) : ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="#" class="nav-link" style="color: black;"><?php echo $this->session->userdata("username") ?></a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('logout') ?>" class="nav-link" style="color: black;">Logout</a>
            </li>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </nav>