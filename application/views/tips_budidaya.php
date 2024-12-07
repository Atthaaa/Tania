<section class="bg-light py-5">
  <div class="container">
    <h5 class="text-center mb-5">Tips Budidaya</h5>
    <div class="row">
      <?php foreach ($tips_budidaya as $key => $value) : ?>
      <div class="col-md-3">
        <a href="<?= base_url('tips_budidaya' . $value['id_tips_budidaya']); ?>" class="text-decoration-none">
          <div class="card mb-3 border-0 shadow">
            <img src="<?php echo $this->config->item('url_tips_budidaya') . $value['gambar_tips_budidaya'] ?>" alt="">
            <div class="card-body text-center">
              <h6><?php echo $value['judul_tips_budidaya'] ?></h6>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>