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
  <style>
    body {
      background:url('<?php echo base_url('assets/bg-header.svg') ?>') no-repeat top;
      background-size: 100%;
    }
    .bg-header {
      width: 100%;         /* Memenuhi seluruh lebar halaman */
      height: auto;        /* Menyesuaikan tinggi proporsional dengan lebar */
      display: block;      /* Menghapus jarak bawaan di bawah gambar */
      margin: 0;           /* Menghilangkan margin */
      padding: 0;          /* Menghilangkan padding */
    }

    
    /* Navbar styles */
    .navbar {
      background-color: #ffffff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      height: 75px;
    }

    .navbar-logo {
      height: 40px;
    }

    .navbar-toggler {
      border: none;
    }

    .navbar-links {
      gap: 30px;
      justify-content: center;
    }

    .nav-link {
      color: #333;
      font-weight: bold;
      font-size: 16px;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      color: #28a745;
      font-size: 17px;
    }

    /* Dropdown menu styles */
    .dropdown-menu {
      background-color: #28a745;
      border-radius: 8px;
      padding: 10px;
    }

    .dropdown-item {
      color: white;
      font-weight: bold;
      transition: all 0.3s ease;
      border-radius: 5px;
    }

    .dropdown-item:hover {
      background-color: #155724;
      color: white !important;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    }

    /* Responsive styles */
    @media (max-width: 768px) {
      .navbar-logo {
        margin-right: 0;
      }

      .navbar-links {
        flex-direction: column;
        gap: 15px;
      }

      .nav-link {
        font-size: 14px;
      }

      .nav-link:hover {
        font-size: 15px;
      }
    }

    @media (max-width: 576px) {
      .navbar {
        height: auto;
        padding: 10px;
      }

      .navbar-logo {
        height: 30px;
      }

      .nav-link {
        font-size: 12px;
      }

      .nav-link:hover {
        font-size: 13px;
      }
    }

    /* Modal container */
  .modal-content {
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
  }

  /* Animasi ketika modal muncul */
  .modal.fade .modal-dialog {
    transform: translateY(-50px);
    opacity: 0;
  }

  .modal.show .modal-dialog {
    transform: translateY(0);
    opacity: 1;
  }

  /* Modal header */
  .modal-header {
    background-color: #28a745;
    color: white;
    border-bottom: none;
    border-radius: 10px 10px 0 0;
  }

  .modal-title {
    font-size: 20px;
    font-weight: bold;
  }

  .btn-close {
    background-color: white;
    border-radius: 50%;
    border: none;
  }

  .btn-close:hover {
    background-color: #f8f9fa;
  }

  /* Modal body */
  .modal-body {
    padding: 20px;
  }

  .modal-body label {
    font-weight: bold;
    color: #333;
    margin-bottom: 5px;
  }

  .modal-body input.form-control {
    border-radius: 5px;
    border: 1px solid #ccc;
    transition: border-color 0.3s ease-in-out;
  }

  .modal-body input.form-control:focus {
    border-color: #28a745;
    box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
  }

  /* Error message */
  .text-danger.small {
    font-size: 12px;
    margin-top: 5px;
  }

  /* Login button */
  .modal-body .btn-primary {
    background-color: #28a745;
    border: none;
    width: 100%;
    font-size: 16px;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }

  .modal-body .btn-primary:hover {
    background-color: #218838;
  }

  /* Responsive design */
  @media (max-width: 576px) {
    .modal-dialog {
      margin: 10px;
    }

    .modal-title {
      font-size: 18px;
    }

    .modal-body .btn-primary {
      font-size: 14px;
      padding: 8px;
    }
  }

    body {
        font-family: Arial, sans-serif;
    }

    .bg-light {
        background-color: #f8f9fa;
    }

    .py-5 {
        padding: 3rem 0;
    }

    .container {
        max-width: 1350px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .search-form .search-container {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        border-radius: 50px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 6px 12px;
        width: 50%;
        max-width: 500px;
        margin: 0 auto;
    }

    .search-input {
        border: 2px solid #dcdfe1;
        border-radius: 50px;
        padding: 15px 15px;
        font-size: 16px;
        transition: all 0.3s ease;
        width: 50%;
    }

    .search-input:focus {
        border-color: #5c6bc0;
        box-shadow: 0 0 5px rgba(92, 107, 192, 0.5);
    }

    .search-button {
        background-color: #5c6bc0;
        border: none;
        color: white;
        border-radius: 50px;
        padding: 8px 18px;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-left: 8px;
    }

    .search-button:hover {
        background-color: #3f4e91;
    }

    .all-button-link {
        text-decoration: none;
    }

    .all-button {
        background-color: #f0f0f0;
        border: 2px solid #dcdfe1;
        color: #333;
        border-radius: 50px;
        padding: 8px 18px;
        font-size: 16px;
        cursor: pointer;
        margin-left: 8px;
        transition: all 0.3s ease;
    }

    .all-button:hover {
        background-color: #e0e0e0;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiar">
  <div class="container">
    <a href="<?php echo base_url('') ?>" class="nav-link">
      <img src="<?php echo base_url('./assets/logo_tania.png')?>" class="navbar-logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a href="<?php echo base_url('') ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Konten Informasi
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?php echo base_url('Hama_penyakit') ?>" class="dropdown-item">Hama Penyakit</a>
            </li>
            <li>
              <a href="<?php echo base_url('layanan_keuangan') ?>" class="dropdown-item">Layanan Keuangan</a>
            </li>
            <li>
              <a href="<?php echo base_url('tips_budidaya') ?>" class="dropdown-item">Tips Budidaya</a>
            </li>
            <li>
              <a href="<?php echo base_url('info_pasar') ?>" class="dropdown-item">Info Pasar</a>
            </li>
          </ul>
        </li>
      </ul>
       <!-- Login dan Logout -->
       <ul class="navbar-nav ms-auto">
        <?php if ($this->session->userdata('id_pengguna')) : ?>
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link"><?php echo $this->session->userdata("Nama") ?></a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('logout') ?>" class="nav-link">Logout</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#login" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('register') ?>" class="nav-link">Register</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
