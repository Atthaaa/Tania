<div class="container py-5">
    <h1 class="text-center mb-4"><?php echo $layanan_keuangan['judul_layanan_keuangan']; ?></h1>
    <div class="text-center mb-3">
        <img src="<?php echo base_url('assets/layanan_keuangan/' . $layanan_keuangan['gambar_layanan_keuangan']); ?>" alt="Gambar <?php echo $layanan_keuangan['judul_layanan_keuangan']; ?>" class="img-fluid" style="max-width: 600px; height: auto;">
    </div>
    <div>
        <p><?php echo nl2br($layanan_keuangan['artikel_layanan_keuangan']); ?></p>
    </div>

    <h4>Rekomendasi Layanan Keuangan Lainnya</h4>
    <div class="row">
      <?php foreach ($rekomendasi as $rekom) : ?>
      <div class="col-md-3">
        <a href="<?= base_url('layanan_keuangan/artikel/' . $rekom['id_layanan_keuangan']); ?>" class="text-decoration-none">
          <div class="card mb-3 border-0 shadow">
            <img src="<?php echo $this->config->item('url_layanan_keuangan') . $rekom['gambar_layanan_keuangan'] ?>" alt="">
            <div class="card-body text-center">
              <h6><?php echo $rekom['judul_layanan_keuangan'] ?></h6>
              <p><?php echo substr($rekom['artikel_layanan_keuangan'], 0, 50); ?>...</p>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
</div>
