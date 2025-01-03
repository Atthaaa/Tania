<style>
  /* Style untuk container utama */
  .container {
      max-width: 1350px;
      margin: 0 auto;
      font-family: Arial, sans-serif;
      color: #333;
  }

  /* Style untuk judul artikel */
  h1 {
      font-size: 2.5rem;
      font-weight: bold;
      color: #ffffff;
      text-align: center;
  }

  img.img-fluid {
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 100%; /* Gambar tidak akan melebihi lebar kontainer */
    height: auto; /* Proporsi gambar akan tetap */
}


  /* Style untuk paragraf artikel */
  p {
      font-size: 1rem;
      line-height: 1.6;
      text-align: justify;
      margin-bottom: 20px;
  }

  /* Style untuk bagian rekomendasi */
  h4 {
      font-size: 1.6rem;
      font-weight: bold;
      margin-top: 40px;
      margin-bottom: 40px;
      color: #2c3e50;
  }

  .row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
  }

  .col-md-3 {
      flex: 1 1 calc(33.33% - 20px);
      max-width: calc(33.33% - 20px);
      margin-bottom: 20px;
  }

  .card {
      overflow: hidden;
      border-radius: 10px;
      background-color: #fff;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }

  .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
  }

  .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-bottom: 3px solid #eaeaea;
  }

  .card-body {
      padding: 20px;
      text-align: center;
  }

  .card-body h6 {
      font-size: 1.1rem;
      font-weight: bold;
      color: #34495e;
      margin-bottom: 10px;
  }

  .card-body p {
      font-size: 0.95rem;
      color: #7f8c8d;
      line-height: 1.4;
  }

  .text-decoration-none {
      text-decoration: none;
      color: inherit;
      transition: color 0.3s ease;
  }

  .text-decoration-none:hover {
      color: #2980b9;
  }

  .tombol {
      display: inline-block;
      padding: 10px 20px;
      background-color: #F0BB78; /* Warna oranye */
      color: #fff;
      font-size: 15px;
      font-weight: bold;
      text-align: center;
      border-radius: 10px;
      text-decoration: none;
      transition: all 0.3s ease-in-out;
  }

  .tombol:hover {
      background-color: #0056b3; /* Warna biru lebih gelap saat hover */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      text-decoration: none;
  }

  /* Media Queries */
  @media (max-width: 768px) {
      .col-md-3 {
          flex: 1 1 calc(48% - 20px); /* Dua kolom pada tablet */
          max-width: calc(48% - 20px);
      }

      h1 {
          font-size: 2rem; /* Ukuran judul lebih kecil */
      }
  }

  @media (max-width: 576px) {
      .col-md-3 {
          flex: 1 1 100%; /* Satu kolom pada ponsel */
          max-width: 100%;
      }

      h1 {
          font-size: 1.8rem; /* Ukuran judul lebih kecil lagi */
      }
  }
</style>

<body>
  <div class="container py-5">
    <h1 class="text-center mb-4"><?php echo $hama_penyakit['judul_hama_penyakit']; ?></h1>
    <div class="text-center mb-3">
        <img src="<?php echo base_url('assets/hama_penyakit/' . $hama_penyakit['gambar_hama_penyakit']); ?>" alt="Gambar <?php echo $hama_penyakit['judul_hama_penyakit']; ?>" class="img-fluid" style="max-width: 600px; height: auto;">
    </div>
    <div>
        <p><?php echo nl2br($hama_penyakit['artikel_hama_penyakit']); ?></p>
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
              <p><?php echo substr($rekom['artikel_hama_penyakit'], 0, 100); ?>...</p>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
        <div class="text-end mt-3">
          <a href="<?= base_url('hama_penyakit'); ?>" class="tombol">Lihat Semua</a>
        </div>
    </div>
</body>
