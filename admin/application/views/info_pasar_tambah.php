<div class="container">

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Judul Artikel</label>
      <input type="text" name="judul_info_pasar" id="" value="<?php echo set_value("judul_info_pasar") ?>" class="form-control">
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
      <label>Gambar Info Pasar</label>
      <input type="file" name="gambar_info_pasar" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>