</section><section class="bg-light py-5">
  <div class="container">
    <h5 class="text-center mb-5">Hama dan Penyakit</h5>
    <div class="row">
      <?php foreach ($hama_penyakit as $key => $value) : ?>
      <div class="col-md-3">
        <a href="<?= base_url('hama_penyakit' . $value['id_hama_penyakit']); ?>" class="text-decoration-none">
          <div class="card mb-3 border-0 shadow">
            <img src="<?php echo $this->config->item('url_hama_penyakit') . $value['gambar_hama_penyakit'] ?>" alt="">
            <div class="card-body text-center">
              <h6><?php echo $value['judul_hama_penyakit'] ?></h6>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>