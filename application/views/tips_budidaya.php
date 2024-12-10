<section class="bg-light py-5">
  <div class="container">
    <h5 class="text-center mb-5">Tips Budidaya</h5>

     <section class="bg-light py-5">
      <div class="container">
        <!-- Search Bar -->
        <form action="<?= base_url('tips_budidaya/pencarian'); ?>" method="GET" class="mb-4">
          <div style="display: flex; align-items: center; justify-content: center; background-color: #fff; border-radius: 50px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); padding: 6px 12px; width: 50%; max-width: 500px; margin: 0 auto;">
            <input type="text" name="query" placeholder="Cari Tips Budidaya..." aria-label="Cari Tips Budidaya" 
              style="border: 2px solid #dcdfe1; border-radius: 50px; padding: 15px 15px; font-size: 16px; transition: all 0.3s ease; width: 50%;"
              onfocus="this.style.borderColor='#5c6bc0'; this.style.boxShadow='0 0 5px rgba(92, 107, 192, 0.5)';"
              onblur="this.style.borderColor='#dcdfe1'; this.style.boxShadow='none';">
            
            <button type="submit" style="background-color: #5c6bc0; border: none; color: white; border-radius: 50px; padding: 8px 18px; font-size: 16px; cursor: pointer; transition: all 0.3s ease; margin-left: 8px;"
              onmouseover="this.style.backgroundColor='#3f4e91';" onmouseout="this.style.backgroundColor='#5c6bc0';">
              Cari <i class="bi bi-search" style="margin-left: 5px;"></i>
            </button>
            
            <!-- Tombol Semua -->
            <a href="<?= base_url('tips_budidaya'); ?>" style="text-decoration: none;">
              <button type="button" style="background-color: #f0f0f0; border: 2px solid #dcdfe1; color: #333; border-radius: 50px; padding: 8px 18px; font-size: 16px; cursor: pointer; margin-left: 8px; transition: all 0.3s ease;"
                onmouseover="this.style.backgroundColor='#e0e0e0';" onmouseout="this.style.backgroundColor='#f0f0f0';">
                Semua
              </button>
            </a>
          </div>
        </form>

        <!-- Hasil Pencarian akan ditampilkan di sini -->
        <div id="result"></div>
      </div>
    </section>


    <div class="row">
      <?php foreach ($tips_budidaya as $key => $value) : ?>
      <div class="col-md-3">
        <a href="<?= base_url('tips_budidaya/artikel/' . $value['id_tips_budidaya']); ?>" class="text-decoration-none">
          <div class="card mb-3 border-0 shadow">
            <img src="<?php echo $this->config->item('url_tips_budidaya') . $value['gambar_tips_budidaya'] ?>" alt="">
            <div class="card-body text-center">
              <h6><?php echo $value['judul_tips_budidaya'] ?></h6>
              <p><?php echo substr($value['artikel_tips_budidaya'], 0, 50); ?>...</p>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>