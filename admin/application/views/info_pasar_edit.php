<div class="container">
  <h5>Edit Info Pasar</h5>

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Judul Info Pasar</label>
      <input type="text" name="judul_info_pasar" id=""
        value="<?php echo set_value("artikel_informasi_pasar", $info_pasar['judul_info_pasar']) ?>" class="form-control">
      <span class="text-danger small">
        <?php echo form_error("judul_info_pasar") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Isi Info Pasar</label>
      <textarea name="artikel_informasi_pasar" id="editorku"
        class="form-control"><?php echo set_value("artikel_informasi_pasar", $info_pasar['artikel_informasi_pasar']) ?></textarea>
      <span class="text-danger small">
        <?php echo form_error("artikel_informasi_pasar") ?>
      </span>
    </div>
    <div class="mb-3">
      <label for="">Foto Lama</label><br>
      <img src="<?php echo $this->config->item('url_info_pasar') . $info_pasar['gambar_info_pasar'] ?>" width="300">
    </div>
    <div class="mb-3">
      <label>Gambar Kategori</label>
      <input type="file" name="gambar_info_pasar" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>