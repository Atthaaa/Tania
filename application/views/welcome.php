<div class="container my-5">
  <div id="carouselExampleCaptions" class="carousel slide">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" style="border-radius: 30px;">
    <div class="carousel-item active">
      <img src="./assets/slider/s1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./assets/slider/s2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./assets/slider/s3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>
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

<!-- </section><section class="bg-light py-5"> -->
  <div class="container">
    <h5 class="text-center mt-5 mb-3">Info Pasar</h5>
    <div style="display: flex; justify-content: center; align-items: center; height: 50vh; position: relative; overflow: hidden;">
      <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS5AbWTIKjDlEme8ra6ml3Km31RvnK8-A6HSa50sj31DIUYGBHKnp3SiHB98k0ZE8uCfyPlxMsKize3/pubhtml?gid=1291711236&amp;single=true&amp;widget=true&amp;headers=false"
              style="position: absolute; top: -25px;  width: 90%; height: 650px; border: none;">
      </iframe>
    </div>
    <br><br>
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
    <h5 class="text-center mb-5">Hama dan Penkit</h5>
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

<iframe ></iframe>