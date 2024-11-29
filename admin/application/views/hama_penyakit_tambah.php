<div class="container">
  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>ID Hama Penyakit</label>
      <!-- Pastikan ID otomatis ditampilkan di input -->
      <input type="text" name="id_hama_penyakit" value="<?php echo isset($id_hama_penyakit) ? $id_hama_penyakit : ''; ?>" class="form-control" readonly>
    </div>
    <div class="mb-3">
      <label>Judul Artikel</label>
      <input type="text" name="judul_hama_penyakit" value="<?php echo set_value("judul_hama_penyakit") ?>" class="form-control">
      <span class="text-danger small">
        <?php echo form_error("judul_hama_penyakit") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Isi Artikel</label>
      <textarea name="artikel_hama_penyakit" id="editorku" class="form-control"><?php echo set_value("artikel_hama_penyakit") ?></textarea>
      <span class="text-danger small">
        <?php echo form_error("artikel_hama_penyakit") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Gambar Hama Penyakit</label>
      <input type="file" name="gambar_hama_penyakit" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
