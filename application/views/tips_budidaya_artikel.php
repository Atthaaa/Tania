<div class="container py-5">
    <h1 class="text-center mb-4"><?php echo $tips_budidaya['judul_tips_budidaya']; ?></h1>
    <div class="text-center mb-3">
        <img src="<?php echo base_url('assets/tips_budidaya/' . $tips_budidaya['gambar_tips_budidaya']); ?>" alt="Gambar <?php echo $tips_budidaya['judul_tips_budidaya']; ?>" class="img-fluid" style="max-width: 600px; height: auto;">
    </div>
    <div>
        <p><?php echo nl2br($tips_budidaya['artikel_tips_budidaya']); ?></p>

    <!-- Bagian rekomendasi -->
    <hr>
    <h4>Rekomendasi Tips Budidaya Lainnya</h4>
    <div class="row">
      <?php foreach ($rekomendasi as $rekom) : ?>
      <div class="col-md-3">
        <a href="<?= base_url('tips_budidaya/artikel/' . $rekom['id_tips_budidaya']); ?>" class="text-decoration-none">
          <div class="card mb-3 border-0 shadow">
            <img src="<?php echo $this->config->item('url_tips_budidaya') . $rekom['gambar_tips_budidaya'] ?>" alt="">
            <div class="card-body text-center">
              <h6><?php echo $rekom['judul_tips_budidaya'] ?></h6>
              <p><?php echo substr($rekom['artikel_tips_budidaya'], 0, 50); ?>...</p>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
</div>