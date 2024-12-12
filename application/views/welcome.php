<div class="container text-center">
  <h1>Cari Informasi Pertanian Disini</h1>
  <h5>Simak artikel terbaru dan berbagai keseruan Tania dalam membangun ekosistem pertanian yang kuat.</h5>
</div>
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
        <a href="<?= base_url('tips_budidaya/artikel/' . $value['id_tips_budidaya']); ?>" class="text-decoration-none">
          <div class="card mb-3 border-0 shadow">
            <img src="<?php echo $this->config->item('url_tips_budidaya') . $value['gambar_tips_budidaya']; ?>" alt="">
            <div class="card-body text-center">
              <h6><?php echo $value['judul_tips_budidaya']; ?></h6>
              <p><?php echo substr($value['artikel_tips_budidaya'], 0, 50); ?>...</p>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
     <div class="text-end mt-4">
      <a href="<?= base_url('tips_budidaya'); ?>" class="btn btn-primary">Lihat Semua</a>
    </div>

  </div>
</section>


<section class="bg-light py-5">
  <div class="container">
    <h5 class="text-center mb-5">Layanan Keuangan</h5>
    <div class="row">
      <?php foreach ($layanan_keuangan as $key => $value) : ?>
      <div class="col-md-3">
        <a href="<?= base_url('layanan_keuangan/artikel/' . $value['id_layanan_keuangan']); ?>" class="text-decoration-none">
          <div class="card mb-3 border-0 shadow">
            <img src="<?php echo $this->config->item('url_layanan_keuangan') . $value['gambar_layanan_keuangan'] ?>" alt="">
            <div class="card-body text-center">
              <h6><?php echo $value['judul_layanan_keuangan'] ?></h6>
              <p><?php echo substr($value['artikel_layanan_keuangan'], 0, 50); ?>...</p>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
     <div class="text-end mt-4">
      <a href="<?= base_url('layanan_keuangan'); ?>" class="btn btn-primary">Lihat Semua</a>
    </div>
  </div>
</section>

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
        <a href="<?= base_url('info_pasar/artikel/' . $value['id_info_pasar']); ?>" class="text-decoration-none">
          <div class="card mb-3 border-0 shadow">
            <img src="<?php echo $this->config->item('url_info_pasar') . $value['gambar_info_pasar'] ?>" alt="">
            <div class="card-body text-center">
              <h6><?php echo $value['judul_info_pasar'] ?></h6>
              <p><?php echo substr($value['artikel_informasi_pasar'], 0, 50); ?>...</p>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
     <div class="text-end mt-4">
      <a href="<?= base_url('info_pasar'); ?>" class="btn btn-primary">Lihat Semua</a>
    </div>
  </div>
</section>

<section class="bg-light py-5">
  <div class="container">
    <h5 class="text-center mb-5">Hama dan Penyakit</h5>
    <div class="row">
      <?php foreach ($hama_penyakit as $value) : ?>
      <div class="col-md-3">
        <a href="<?= base_url('hama_penyakit/artikel/' . $value['id_hama_penyakit']); ?>" class="text-decoration-none">
          <div class="card mb-3 border-0 shadow">
            <img src="<?php echo $this->config->item('url_hama_penyakit') . $value['gambar_hama_penyakit']; ?>" alt="" class="img-fluid">
            <div class="card-body text-center">
              <h6><?php echo $value['judul_hama_penyakit']; ?></h6>
              <p><?php echo substr($value['artikel_hama_penyakit'], 0, 50); ?>...</p>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
    <!-- Tombol "Lihat Semua" -->
    <div class="text-end mt-4">
      <a href="<?= base_url('hama_penyakit'); ?>" class="btn btn-primary">Lihat Semua</a>
    </div>
  </div>
</section>

<style>
  .container.text-center {
  margin-top: 50px; /* Margin atas */
  margin-bottom: 60px; /* Margin bawah */
  padding: 20px; /* Padding tambahan untuk memberi ruang */
}

.container.text-center h1 {
  font-size: 32px; /* Ukuran besar untuk heading utama */
  font-weight: bold; /* Teks lebih tebal */
  color: #ffffff; /* Warna hijau gelap */
  margin-bottom: 10px; /* Jarak antara H1 dan H5 */
}

.container.text-center h5 {
  font-size: 18px; /* Ukuran sedang untuk deskripsi */
  color: #ffffff; /* Warna abu-abu untuk teks sekunder */
  line-height: 1.6; /* Memberikan jarak antar baris */
}

 /* General Styling for Article Section */
.row {
  display: flex;
  justify-content: space-between;
  gap: 0px; /* Jarak antar kartu disempitkan menjadi sekitar 0.5 cm */
  margin: 0;
}

.col-md-3 {
  flex: 0 0 25%; /* Agar tetap empat kartu dalam satu baris */
  max-width: 25%;
}

@media (max-width: 768px) {
  .col-md-3 {
    flex: 0 0 48%; /* Dua kartu di layar tablet */
    max-width: 48%;
  }
}

@media (max-width: 576px) {
  .col-md-3 {
    flex: 0 0 100%; /* Satu kartu per baris di layar kecil */
    max-width: 100%;
  }
}

/* Card Styling */
.card {
  background-color: white;
  border: 1px solid #ddd;
  border-radius: 10px;
  overflow: hidden;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
}

.card img {
  width: 100%;
  height: 220px; /* Gambar diperbesar */
  object-fit: cover;
}

.card-body {
  padding: 10px; /* Padding diperkecil */
  text-align: left;
}

.card-body h6 {
  font-size: 16px; /* Ukuran judul tetap */
  font-weight: bold;
  color: #2c5d3f;
  margin-bottom: 8px;
}

.card-body p {
  font-size: 13px; /* Ukuran teks deskripsi */
  color: #666;
  line-height: 1.5;
  margin-bottom: 10px;
}

/* Metadata (Tanggal dan View Count) */
.card-body .metadata {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 12px;
  color: #888;
}

.card-body .metadata .date {
  font-style: italic;
}

.card-body .metadata .views {
  display: flex;
  align-items: center;
  gap: 5px;
}

.card-body .metadata .views i {
  font-size: 14px;
  color: #555;
}

/* Button (Lihat Semua) */
.text-end .btn-primary {
  padding: 10px 20px;
  font-size: 14px;
  border-radius: 5px;
  text-decoration: none;
  background-color: #007bff;
  color: #fff;
}

.text-end .btn-primary:hover {
  background-color: #0056b3;
}

</style>