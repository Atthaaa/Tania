<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">

      <h5>Registrasi Member</h5>

      <form action="" method="post">

        <div class="mb-3">
          <label for="">Email</label>
          <input type="text" name="email_member" value="<?php echo set_value('email_member') ?>" class="form-control">
          <span class="text-muted"><?php echo form_error('email_member') ?></span>
        </div>
        <div class="mb-3">
          <label for="">Password</label>
          <input type="text" name="password_member" value="<?php echo set_value('password_member') ?>" class="form-control">
          <span class="text-muted"><?php echo form_error('password_member') ?></span>
        </div>
        <div class="mb-3">
          <label for="">Nama</label>
          <input type="text" name="nama_member" value="<?php echo set_value('nama_member') ?>" class="form-control">
          <span class="text-muted"><?php echo form_error('nama_member') ?></span>
        </div>
        <div class="mb-3">
          <label for="">Alamat</label>
          <textarea name="alamat_member" id="" class="form-control"><?php echo set_value('alamat_member') ?></textarea>
          <span class="text-muted"><?php echo form_error('alamat_member') ?></span>
        </div>
        <div class="mb-3">
          <label for="">Nomor WA</label>
          <input type="text" name="wa_member" value="<?php echo set_value('wa_member') ?>" class="form-control">
          <span class="text-muted"><?php echo form_error('wa_member') ?></span>
        </div>
        <div class="mb-3">
          <label for="">Kota/Kabupaten</label>
          <select name="city_id" id="" class="form-control form-select">
            <option value="">Pilih</option>
            <?php foreach ($distrik as $key => $value) : ?>
              <option value="<?php echo $value['city_id'] ?>" <?php echo $value['city_id'] == set_value('city_id') ? 'selected' : '' ?>>
                <?php echo $value['type'] ?> <?php echo $value['city_name'] ?> - <?php echo $value['province'] ?></option>
            <?php endforeach; ?>
          </select>
          <span class="text-muted"><?php echo form_error('city_id') ?></span>
        </div>

        <button class="btn btn-primary">Kirim</button>

      </form>
    </div>
  </div>
</div>