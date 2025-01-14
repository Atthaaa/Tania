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
  <nav class="navbar navbar-expand-lg navbar-dark mb-4" style="background-color: black; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); height: 75px;">
    <div class="container text-center">
      <img src="../assets/logo_tania.png" style="height: 30px;">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <!-- Login dan Logout -->
       <ul class="navbar-nav ms-auto">
        <?php if ($this->session->userdata('id_pimpinan')) : ?>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link"><?php echo $this->session->userdata("Username") ?></a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('logout') ?>" class="nav-link">Logout</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#login" class="nav-link">Login</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
    </div>
  </nav>
  <div class="container text-center mt-5 mb-5">
    <h2>SELAMAT DATANG PIMPINAN</h2>

  </div>