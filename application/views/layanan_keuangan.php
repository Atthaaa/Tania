<style>
  /* styles.css */
    body {
        font-family: Arial, sans-serif;
    }

    .bg-light {
        background-color: #f8f9fa;
    }

    .py-5 {
        padding: 3rem 0;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .search-form .search-container {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        border-radius: 50px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 6px 12px;
        width: 50%;
        max-width: 500px;
        margin: 0 auto;
    }

    .search-input {
        border: 2px solid #dcdfe1;
        border-radius: 50px;
        padding: 15px 15px;
        font-size: 16px;
        transition: all 0.3s ease;
        width: 50%;
    }

    .search-input:focus {
        border-color: #5c6bc0;
        box-shadow: 0 0 5px rgba(92, 107, 192, 0.5);
    }

    .search-button {
        background-color: #5c6bc0;
        border: none;
        color: white;
        border-radius: 50px;
        padding: 8px 18px;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-left: 8px;
    }

    .search-button:hover {
        background-color: #3f4e91;
    }

    .all-button-link {
        text-decoration: none;
    }

    .all-button {
        background-color: #f0f0f0;
        border: 2px solid #dcdfe1;
        color: #333;
        border-radius: 50px;
        padding: 8px 18px;
        font-size: 16px;
        cursor: pointer;
        margin-left: 8px;
        transition: all 0.3s ease;
    }

    .all-button:hover {
        background-color: #e0e0e0;
    }

</style>

<section class="bg-light py-5">
  <div class="container">
    <h5 class="text-center mb-2">Layanan Keuangan</h5>

    <section class="bg-light py-5">
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

