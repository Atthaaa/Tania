<div class="container py-5">
    <h1 class="text-center mb-4"><?php echo $info_pasar['judul_info_pasar']; ?></h1>
    <div class="text-center mb-3">
        <img src="<?php echo base_url('assets/info_pasar/' . $info_pasar['gambar_info_pasar']); ?>" alt="Gambar <?php echo $info_pasar['judul_info_pasar']; ?>" class="img-fluid" style="max-width: 600px; height: auto;">
    </div>
    <div>
        <p><?php echo nl2br($info_pasar['artikel_informasi_pasar']); ?></p>
    </div>

    <h4>Rekomendasi Info Pasar Lainnya</h4>
    <div class="row">
      <?php foreach ($rekomendasi as $rekom) : ?>
      <div class="col-md-3">
        <a href="<?= base_url('info_pasar/artikel/' . $rekom['id_info_pasar']); ?>" class="text-decoration-none">
          <div class="card mb-3 border-0 shadow">
            <img src="<?php echo $this->config->item('url_info_pasar') . $rekom['gambar_info_pasar'] ?>" alt="">
            <div class="card-body text-center">
              <h6><?php echo $rekom['judul_info_pasar'] ?></h6>
              <p><?php echo substr($rekom['artikel_informasi_pasar'], 0, 50); ?>...</p>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
</div>

