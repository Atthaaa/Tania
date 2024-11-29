<div class="container">
  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>ID tips budidaya</label>
      <!-- Pastikan ID otomatis ditampilkan di input -->
      <input type="text" name="id_tips_budidaya" value="<?php echo isset($id_tips_budidaya) ? $id_tips_budidaya : ''; ?>" class="form-control" readonly>
    </div>
    <div class="mb-3">
      <label>Judul Artikel</label>
      <input type="text" name="judul_tips_budidaya" value="<?php echo set_value("judul_tips_budidaya") ?>" class="form-control">
      <span class="text-danger small">
        <?php echo form_error("judul_tips_budidaya") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Isi Artikel</label>
      <textarea name="artikel_tips_budidaya" id="editorku" class="form-control"><?php echo set_value("artikel_tips_budidaya") ?></textarea>
      <span class="text-danger small">
        <?php echo form_error("artikel_tips_budidaya") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Gambar tips budidaya</label>
      <input type="file" name="gambar_tips_budidaya" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
