<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengguna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4>Edit Pengguna</h4>
            <form method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="Username" class="form-control" value="<?php echo set_value("Username", $pengguna['Username']) ?>">
                    <?php echo form_error('Username', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="Nama" class="form-control" value="<?php echo set_value("Nama", $pengguna['Nama']) ?>">
                    <?php echo form_error('Nama', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="text" name="No_HP" class="form-control" value="<?php echo set_value("No_HP", $pengguna['No_HP']) ?>">
                    <?php echo form_error('No_HP', '<small class="text-danger">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
