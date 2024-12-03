<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pengguna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4>Registrasi Pengguna</h4>
            <form action="<?php echo site_url('register/save'); ?>" method="post">
                <div class="form-group">
                    <label>ID Pengguna</label>
                    <input type="text" name="id_pengguna" value="<?php echo $id_pengguna; ?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="Username" class="form-control" value="<?php echo set_value('Username'); ?>">
                    <?php echo form_error('Username', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="Password" class="form-control" value="<?php echo set_value('Password'); ?>">
                    <?php echo form_error('Password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="Nama" class="form-control" value="<?php echo set_value('Nama'); ?>">
                    <?php echo form_error('Nama', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="text" name="No_HP" class="form-control" value="<?php echo set_value('No_HP'); ?>">
                    <?php echo form_error('No_HP', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="Jenis_kelamin" class="form-control">
                        <option value="">Pilih</option>
                        <option value="Laki-laki" <?php echo set_select('Jenis_kelamin', 'Laki-laki'); ?>>Laki-laki</option>
                        <option value="Perempuan" <?php echo set_select('Jenis_kelamin', 'Perempuan'); ?>>Perempuan</option>
                    </select>
                    <?php echo form_error('Jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
