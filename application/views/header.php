
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tania</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark mb-4" style="background-color: #ffffff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); height: 75px;">
    <div class="container">
      <!-- Logo -->
      <img src="<?php echo base_url('./assets/logo_tania.png')?>" style="height: 40px; margin-right: 200px;">
      <!-- Toggler untuk mode responsif -->
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarContent" style="border: none;">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Links -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mx-auto" style="gap: 30px; justify-content: center;">
          <!-- Home -->
          <li class="nav-item">
            <a href="<?php echo base_url('') ?>" class="nav-link" 
               style="color: #333; font-weight: bold; transition: all 0.3s; font-size: 16px;">
              Home
            </a>
          </li>

          <!-- Dropdown Konten Informasi -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" 
               href="#" role="button" 
               data-bs-toggle="dropdown" 
               style="color: #333; font-weight: bold; transition: all 0.3s; font-size: 16px;">
              Konten Informasi
            </a>
            <!-- Dropdown Items -->
            <ul class="dropdown-menu" style="background-color: #28a745; border-radius: 8px; padding: 10px;">
              <li>
                <a href="<?php echo base_url('Hama_penyakit') ?>" 
                   class="dropdown-item" 
                   style="color: white; font-weight: bold; transition: all 0.3s; border-radius: 5px;">
                  Hama Penyakit
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('layanan_keuangan') ?>" 
                   class="dropdown-item" 
                   style="color: white; font-weight: bold; transition: all 0.3s; border-radius: 5px;">
                  Layanan Keuangan
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('tips_budidaya') ?>" 
                   class="dropdown-item" 
                   style="color: white; font-weight: bold; transition: all 0.3s; border-radius: 5px;">
                  Tips Budidaya
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('info_pasar') ?>" 
                   class="dropdown-item" 
                   style="color: white; font-weight: bold; transition: all 0.3s; border-radius: 5px;">
                  Info Pasar
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <!-- Login dan Logout -->
        <?php if ($this->session->userdata('id_pengguna')) : ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="#" class="nav-link" style="color: #333; font-weight: bold; transition: all 0.3s;"><?php echo $this->session->userdata("Nama") ?></a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('logout') ?>" class="nav-link" style="color: #333; font-weight: bold; transition: all 0.3s;">Logout</a>
            </li>
          </ul>
        <?php endif; ?>

        <?php if (!$this->session->userdata('id_pengguna')) : ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="#" data-bs-toggle="modal" data-bs-target="#login" class="nav-link" style="color: #333; font-weight: bold; transition: all 0.3s;">Login</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('register') ?>" class="nav-link" style="color: #333; font-weight: bold; transition: all 0.3s;">Register</a>
            </li>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </nav>

  <!-- Custom Hover Styles -->
  <style>
    /* Hover untuk navbar link */
    .nav-link:hover {
      color: #28a745;
      font-size: 17px;
    }

    /* Hover untuk dropdown item */
    .dropdown-item:hover {
      background-color: #155724;
      color: white !important;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    }

    /* Tambahkan transisi untuk semua elemen */
    .nav-link, .dropdown-item {
      transition: all 0.3s ease;
    }
  </style>
</body>
