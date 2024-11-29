<div class="container">
  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>ID info pasar</label>
      <!-- Pastikan ID otomatis ditampilkan di input -->
      <input type="text" name="id_info_pasar" value="<?php echo isset($id_info_pasar) ? $id_info_pasar : ''; ?>" class="form-control" readonly>
    </div>
    <div class="mb-3">
      <label>Judul Artikel</label>
      <input type="text" name="judul_info_pasar" value="<?php echo set_value("judul_info_pasar") ?>" class="form-control">
      <span class="text-danger small">
        <?php echo form_error("judul_info_pasar") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Isi Artikel</label>
      <textarea name="artikel_info_pasar" id="editorku" class="form-control"><?php echo set_value("artikel_info_pasar") ?></textarea>
      <span class="text-danger small">
        <?php echo form_error("artikel_info_pasar") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Gambar info pasar</label>
      <input type="file" name="gambar_info_pasar" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
