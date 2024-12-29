<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- External CSS -->
<style>
    /* Responsif untuk footer */
    footer {
        background-color: #F4FFEE;
        text-align: center;
        padding: 30px 10px; /* Sesuaikan padding untuk perangkat kecil */
        font-family: 'Georgia', serif;
    }

    /* Logo */
    footer .title img {
        max-width: 150px;
        margin-bottom: 15px;
    }

    /* Navigasi */
    footer .navigasi nav {
        display: flex;
        flex-wrap: wrap; /* Agar link turun ke baris baru jika ruang tidak cukup */
        justify-content: center;
    }

    footer .navigasi nav a {
        margin: 10px 15px;
        text-decoration: none;
        color: #000;
        font-weight: bold;
        font-size: 16px;
    }

    /* Kontak */
    footer .contact a {
        color: #000;
        text-decoration: none;
        font-size: 14px;
        margin: 10px 0;
        display: inline-block;
    }

    /* Ikon Sosial */
    footer .icons {
        display: flex;
        justify-content: center;
        gap: 10px; /* Jarak antar ikon */
    }

    footer .icons a {
        font-size: 18px;
        color: #000;
        text-decoration: none;
    }

    /* Alamat */
    footer .address {
        font-size: 14px;
        margin: 10px 0;
        color: #000;
    }

    /* Copyright */
    footer .copyright {
        font-size: 12px;
        color: #666;
        margin-top: 10px;
    }

    /* Media Queries */
    @media (max-width: 768px) {
        footer .title img {
            max-width: 120px;
        }

        footer .navigasi nav a {
            font-size: 14px;
        }

        footer .contact a,
        footer .address {
            font-size: 12px;
        }
    }

    @media (max-width: 480px) {
        footer .navigasi nav a {
            margin: 5px 10px;
            font-size: 12px;
        }

        footer .contact a,
        footer .address {
            font-size: 10px;
        }
    }
</style>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f1b19cdf-22d4-4caf-972b-d84cda3de777";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>
<body>
<footer>
    <div class="title">
        <img src="<?php echo base_url('assets/logo_tania.png') ?>">
    </div>

    <div class="navigasi">
        <nav>
        <a href="<?php echo base_url('Hama_penyakit') ?>">Hama Penyakit</a>
        <a href="<?php echo base_url('layanan_keuangan') ?>">Layanan Keuangan</a>
        <a href="<?php echo base_url('tips_budidaya') ?>">Tips Budidaya</a>
        <a href="<?php echo base_url('info_pasar') ?>">Info Pasar</a>
    </nav>
    </div>
    <div class="contact">
        <a href="mailto:mendodeveloper@gmail.com">mendodeveloper@gmail.com</a>
    </div>
    <div class="icons">
        <a class="fa-solid fa-phone" href=""></a>
        <a class="fa-brands fa-instagram" href=""></a>
        <a class="fa-brands fa-whatsapp" href=""></a>
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
