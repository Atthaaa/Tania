  <style>
  /* Container for the search bar */
/* Container for the search bar */
.search-container {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #ffffff;
  border-radius: 50px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  padding: 6px 12px;
  width: 100%;
  max-width: 500px;
  margin: 0 auto;
  margin-top: -20px;
}

/* Input field for search */
.search-input {
  border: 2px solid #dcdfe1;
  border-radius: 50px;
  padding: 12px 15px;
  font-size: 16px;
  width: 100%;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

/* Highlight input field on focus */
.search-input:focus {
  border-color: #5c6bc0;
  box-shadow: 0 0 5px rgba(92, 107, 192, 0.5);
  outline: none;
}

/* Search button */
.search-button {
  background-color: #5c6bc0;
  border: none;
  color: #ffffff;
  border-radius: 50px;
  padding: 8px 30px;
  font-size: 16px;
  cursor: pointer;
  margin-left: 8px;
  width: 100%;
  max-width: 115px;
  transition: background-color 0.3s ease;
}

/* Hover effect for search button */
.search-button:hover {
  background-color: #3f4e91;
}

/* Button for "All" option */
.all-button {
  background-color: #f0f0f0;
  border: 2px solid #dcdfe1;
  color: #333;
  border-radius: 50px;
  padding: 8px 18px;
  font-size: 16px;
  cursor: pointer;
  margin-left: 8px;
  transition: background-color 0.3s ease;
  text-decoration: none;
}

/* Hover effect for "All" button */
.all-button:hover {
  background-color: #e0e0e0;
}

.col-md-3 {
  flex: 0 0 33.3%; /* Agar tetap empat kartu dalam satu baris */
  max-width: 33.3%;
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
  justify-content: center;
  margin-top: 50px;
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
  font-size: 12px; /* Ukuran teks deskripsi */
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

h5 {
  font-size: 45px; /* Ukuran teks */
  font-weight: bold; /* Teks tebal */
  color: #ffffff; /* Warna hijau gelap */
  text-transform: uppercase; /* Huruf kapital semua */
}


h5::after {
  content: "";
  display: block;
  width: 200px; /* Lebar garis */
  height: 4px; /* Ketebalan garis */
  background-color: #007bff; /* Warna biru */
  margin: 10px auto 0; /* Jarak garis ke teks */
  border-radius: 2px; /* Ujung garis membulat */
}

#carouselExampleAutoplaying {
  margin-top: -30px; /* Geser ke atas sebesar 30px */
}

.row {
  margin-top: 20px; /* Menurunkan posisi row sebesar 20px */
  margin-bottom: 60px;
}
</style>

  <div class="container">
    <h5 class="text-center mb-5 mt-5">Hama Penyakit</h5>

    <section class="py-5">
      <div class="container">
        <!-- Search Bar -->
        <form action="<?= base_url('hama_penyakit/pencarian'); ?>" method="GET" class="mb-4">
          <div class="search-container">
            <input type="text" name="query" placeholder="Cari Hama Penyakit..." aria-label="Cari Hama Penyakit" 
              class="search-input">
            
            <button type="submit" class="search-button">
              Cari <i class="bi bi-search" style="margin-left: 5px;"></i>
            </button>
            
            <!-- Tombol Semua -->
            <a href="<?= base_url('hama_penyakit'); ?>" class="all-button">
              Semua
            </a>
          </div>
        </form>

        <!-- Hasil Pencarian akan ditampilkan di sini -->
        <div id="result"></div>
      </div>
    </section>

    <div class="container my-4">
      <div id="carouselExampleCaptions" class="carousel-slide">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner" style="border-radius: 30px;">
        <div class="carousel-item active">
          <img src="<?php echo base_url('assets/slider/s1.jpg') ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/slider/s2.jpg') ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/slider/s3.jpg') ?>" class="d-block w-100" alt="...">
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
    </div>

    <div class="row">
      <?php foreach ($hama_penyakit as $key => $value) : ?>
      <div class="col-md-3">
        <a href="<?= base_url('hama_penyakit/artikel/' . $value['id_hama_penyakit']); ?>" class="text-decoration-none">
          <div class="card mb-3 border-0 shadow">
            <img src="<?php echo $this->config->item('url_hama_penyakit') . $value['gambar_hama_penyakit'] ?>" alt="">
            <div class="card-body text-center">
              <h6><?php echo $value['judul_hama_penyakit'] ?></h6>
              <p><?php echo substr($value['artikel_hama_penyakit'], 0, 50); ?>...</p>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div> 





