<div class="container py-5">
    <h1 class="text-center mb-4"><?php echo $hama_penyakit['judul_hama_penyakit']; ?></h1>
    <div class="text-center mb-3">
        <img src="<?php echo base_url('assets/hama_penyakit/' . $hama_penyakit['gambar_hama_penyakit']); ?>" alt="Gambar <?php echo $hama_penyakit['judul_hama_penyakit']; ?>" class="img-fluid" style="max-width: 600px; height: auto;">
    </div>
    <div>
        <p><?php echo nl2br($hama_penyakit['artikel_hama_penyakit']); ?></p>
    </div>
</div>
<h4>Rekomendasi Hama Penyakit Lainnya</h4>
    <div class="row">
      <?php foreach ($rekomendasi as $rekom) : ?>
      <div class="col-md-3">
        <a href="<?= base_url('hama_penyakit/artikel/' . $rekom['id_hama_penyakit']); ?>" class="text-decoration-none">
          <div class="card mb-3 border-0 shadow">
            <img src="<?php echo $this->config->item('url_hama_penyakit') . $rekom['gambar_hama_penyakit'] ?>" alt="">
            <div class="card-body text-center">
              <h6><?php echo $rekom['judul_hama_penyakit'] ?></h6>
              <p><?php echo substr($rekom['artikel_hama_penyakit'], 0, 50); ?>...</p>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>