<div class="container">
  <h5>Edit Layanan Keuangan</h5>

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Judul Layanan Keuangan</label>
      <input type="text" name="judul_layanan_keuangan" id=""
        value="<?php echo set_value("artikel_layanan_keuangan", $layanan_keuangan['judul_layanan_keuangan']) ?>" class="form-control">
      <span class="text-danger small">
        <?php echo form_error("judul_layanan_keuangan") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Isi Layanan Keuangan</label>
      <textarea name="artikel_layanan_keuangan" id="editorku"
        class="form-control"><?php echo set_value("artikel_layanan_keuangan", $layanan_keuangan['artikel_layanan_keuangan']) ?></textarea>
      <span class="text-danger small">
        <?php echo form_error("artikel_layanan_keuangan") ?>
      </span>
    </div>
    <div class="mb-3">
      <label for="">Foto Lama</label><br>
      <img src="<?php echo $this->config->item('url_layanan_keuangan') . $layanan_keuangan['gambar_layanan_keuangan'] ?>" width="300">
    </div>
    <div class="mb-3">
      <label>Gambar Kategori</label>
      <input type="file" name="gambar_layanan_keuangan" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>