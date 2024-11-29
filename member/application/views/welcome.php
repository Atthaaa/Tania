<div id="carouselExampleCaptions" class="carousel slide">

  <div class="carousel-inner">

    <?php foreach ($slider as $key => $value) : ?>
    <div class="carousel-item <?php echo $key == 0 ? 'active' : '' ?>">
      <img src="<?php echo $this->config->item('url_slider') . $value['foto_slider'] ?>" class="d-block w-100"
        alt="...">
    </div>
    <?php endforeach; ?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="bg-white py-5">
  <div class="container">
    <h5 class="text-center mb-5">Tips Budidaya</h5>
    <div class="row">
      <?php foreach ($tips_budidaya as $key => $value) : ?>
      <div class="col-md-4 text-center">
        <a href="<?= base_url('tips_budidaya' . $value['id_tips_budidaya']); ?>" class="text-decoration-none">
          <img src="<?php echo $this->config->item('url_tips_budidaya') . $value['gambar_tips_budidaya'] ?>"
            class="w-50 rounded-circle" alt="">
          <h5 class="mt-3"><?php echo $value['judul_tips_budidaya'] ?></h5>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="bg-light py-5">
  <div class="container">
    <h5 class="text-center mb-5">Layanan Keuangan</h5>
    <div class="row">
      <?php foreach ($layanan_keuangan as $key => $value) : ?>
      <div class="col-md-3">
        <a href="<?= base_url('layanan_keuangan' . $value['id_layanan_keuangan']); ?>" class="text-decoration-none">
          <div class="card mb-3 border-0 shadow">
            <img src="<?php echo $this->config->item('url_layanan_keuangan') . $value['gambar_layanan_keuangan'] ?>" alt="">
            <div class="card-body text-center">
              <h6><?php echo $value['judul_layanan_keuangan'] ?></h6>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

</section><section class="bg-light py-5">
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