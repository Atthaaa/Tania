<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    
    <!-- External CSS -->
    <style>
        footer {
            background-color: #f7fff0;
            text-align: center;
            padding: 40px 20px;
            margin: 0;
            font-family: Arial, sans-serif;
            border-top: 2px solid #d4d4d4;
        }

        footer nav {
            margin: 10px 0;
            font-size: 16px;
            font-family: Arial, sans-serif;
        }

        footer nav a {
            margin: 0 15px;
            color: black;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer nav a:hover {
            color: gray;
        }

        footer div.contact {
            margin: 20px 0;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }

        footer div.icons a {
            margin: 0 10px;
            text-decoration: none;
            color: black;
            transition: transform 0.3s;
        }

        footer div.icons a:hover {
            transform: scale(1.2);
        }

        footer div.address {
            margin: 10px 0;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }

        footer div.copyright {
            margin-top: 20px;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<footer>
    <div class="title">
        <img src="./assets/logo_tania.png">
    </div>

    <nav>
        <a href="konsultasi-ahli.php">KONSULTASI AHLI</a>
        <a href="tips_budidaya.php">TIPS BUDIDAYA</a>
        <a href="informasi_pasar.php">INFORMASI PASAR</a>
        <a href="hama_penyakit.php">HAMA & PENYAKIT</a>
        <a href="layanan_keuangan.php">KEUANGAN</a>
    </nav>

    <div class="contact">
        <a href="mailto:mendodeveloper@gmail.com">mendodeveloper@gmail.com</a>
    </div>

    <div class="icons">
        <a href="tel:+62">☎</a>
        <a href="https://instagram.com">📷</a>
        <a href="https://wa.me">📲</a>
    </div>

    <div class="address">
        Depok, Sleman, Yogyakarta, 55283
    </div>

    <div class="copyright">
        &copy; 2024 mendodeveloper
    </div>
</footer>

<script>
    new DataTable('#tabelku');

    <?php if ($this->session->flashdata('pesan_sukses')) : ?>
    swal("Sukses!", "<?php echo $this->session->flashdata('pesan_sukses'); ?>", "success");
    <?php endif; ?>

    <?php if ($this->session->flashdata('pesan_gagal')) : ?>
    swal("Gagal!", "<?php echo $this->session->flashdata('pesan_gagal'); ?>", "error");
    <?php endif; ?>
</script>

<!-- Modal -->
<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('welcome'); ?>" method="post">
                    <div class="mb-3">
                        <label for="">Username</label>
                        <input type="text" name="Username" class="form-control" value="<?php echo set_value('Username') ?>">
                        <div class="text-danger small">
                            <?php echo form_error('Username') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="Password" class="form-control" value="<?php echo set_value('Password') ?>">
                        <div class="text-danger small">
                            <?php echo form_error('Password') ?>
                        </div>
                    </div>
                    <button class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
