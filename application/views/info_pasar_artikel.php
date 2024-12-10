<div class="container py-5">
    <h1 class="text-center mb-4"><?php echo $info_pasar['judul_info_pasar']; ?></h1>
    <div class="text-center mb-3">
        <img src="<?php echo base_url('assets/info_pasar/' . $info_pasar['gambar_info_pasar']); ?>" alt="Gambar <?php echo $info_pasar['judul_info_pasar']; ?>" class="img-fluid" style="max-width: 600px; height: auto;">
    </div>
    <div>
        <p><?php echo nl2br($info_pasar['artikel_informasi_pasar']); ?></p>
    </div>
</div>
