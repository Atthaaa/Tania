
<section class="py-5">
  <div class="container">
    <h5 class="text-center mb-2">Layanan Keuangan</h5>

    <section class="py-5">
    <div class="container">
        <!-- Search Bar -->
        <form action="<?= base_url('layanan_keuangan/pencarian'); ?>" method="GET" class="search-form">
            <div class="search-container">
                <input type="text" name="query" placeholder="Cari Layanan Keuangan..." aria-label="Cari Layanan Keuangan" 
                    class="search-input">
                
                <button type="submit" class="search-button">
                    Cari <i class="bi bi-search" style="margin-left: 5px;"></i>
                </button>
                
                <!-- Tombol Semua -->
                <a href="<?= base_url('layanan_keuangan'); ?>" class="all-button-link">
                    <button type="button" class="all-button">
                        Semua
                    </button>
                </a>
            </div>
        </form>

        <!-- Hasil Pencarian akan ditampilkan di sini -->
        <div id="result"></div>
    </div>
    </section>


    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">



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
  </div>
</section>

