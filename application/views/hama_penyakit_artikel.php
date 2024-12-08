<div class="container py-5">
    <h1 class="text-center mb-4"><?php echo $hama_penyakit['judul_hama_penyakit']; ?></h1>
    <div class="text-center mb-3">
        <img src="<?php echo base_url('assets/hama_penyakit/' . $hama_penyakit['gambar_hama_penyakit']); ?>" alt="Gambar <?php echo $hama_penyakit['judul_hama_penyakit']; ?>" class="img-fluid" style="max-width: 600px; height: auto;">
    </div>
    <div>
        <p><?php echo nl2br($hama_penyakit['artikel_hama_penyakit']); ?></p>
    </div>
</div>
