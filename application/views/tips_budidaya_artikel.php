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
}

/* Style untuk gambar utama artikel */
img.img-fluid {
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    text-align: srart;
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
    background-color: #F0BB78; /* Warna biru */
    color: #fff; /* Warna teks putih */
    font-size: 15px;
    font-weight: bold;
    text-align: center;
    border-radius: 10px; /* Sudut membulat */
    text-decoration: none; /* Menghilangkan garis bawah */
    transition: all 0.3s ease-in-out; /* Efek transisi */
  }

  .tombol:hover {
    background-color: #0056b3; /* Warna biru lebih gelap saat hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Efek bayangan */
    text-decoration: none; /* Tetap tanpa garis bawah */
  }
</style>
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
              <p><?php echo substr($rekom['artikel_tips_budidaya'], 0, 100); ?>...</p>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
    <div class="text-end mt-3">
      <a href="<?= base_url('tips_budidaya'); ?>" class="tombol">Lihat Semua</a>
    </div>
</div>