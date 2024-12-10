<div class="container py-5">
    <h1 class="text-center mb-4"><?php echo $layanan_keuangan['judul_layanan_keuangan']; ?></h1>
    <div class="text-center mb-3">
        <img src="<?php echo base_url('assets/layanan_keuangan/' . $layanan_keuangan['gambar_layanan_keuangan']); ?>" alt="Gambar <?php echo $layanan_keuangan['judul_layanan_keuangan']; ?>" class="img-fluid" style="max-width: 600px; height: auto;">
    </div>
    <div>
        <p><?php echo nl2br($layanan_keuangan['artikel_layanan_keuangan']); ?></p>
    </div>
</div>
