<div class="container mt-5">
  <div class="row">
    <div class="col-md-4 mt-5 offset-md-4 bg-white shadow p-5">
      <form action="" method="post">
        <div class="mb-3">
          <label for="">Username</label>
          <input type="text" name="username" class="form-control" value="<?php echo set_value('username', $this->session->userdata('username')) ?>">
          <span class="text-danger small">
            <?php echo form_error("username") ?>
          </span>
        </div>
        <div class="mb-3">
          <label for="">Password</label>
          <input type="password" name="password" class="form-control">
          <p class="text-muted">Kosongkan jika password tidak dirubah</p>
        </div>
        <div class="mb-3">
          <label for="">Nama Lengkap</label>
          <input type="text" name="nama_admin" class="form-control" value="<?php echo set_value('nama_admin', $this->session->userdata('nama_admin')) ?>">
          <span class="text-danger small">
            <?php echo form_error("nama_admin") ?>
          </span>
        </div>
        <button class="btn btn-primary">Ubah Akun</button>
      </form>
    </div>
  </div>
</div>