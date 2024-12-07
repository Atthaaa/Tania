<section class="bg-light py-5">
  <div class="container">
    <h5 class="text-center mb-5">Info Pasar</h5>
    <div class="row">
      <?php foreach ($info_pasar as $key => $value) : ?>
      <div class="col-md-3">
        <a href="<?= base_url('info_pasar' . $value['id_info_pasar']); ?>" class="text-decoration-none">
          <div class="card mb-3 border-0 shadow">
            <img src="<?php echo $this->config->item('url_info_pasar') . $value['gambar_info_pasar'] ?>" alt="">
            <div class="card-body text-center">
              <h6><?php echo $value['judul_info_pasar'] ?></h6>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>