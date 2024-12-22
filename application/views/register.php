<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pengguna</title>

<style>
    .container {
    max-width: 1350px;
    margin: 0 auto;
    font-family: Arial, sans-serif;
    color: #333;
    }

    form {
    background: #ffffff;
    margin: 20px auto 50px;
    padding: 40px;
    border-radius: 30px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    text-align: left;
}

form .form-group label {
    font-size: 16px;
    font-weight: bold;
    color: #555555;
    margin-bottom: 8px;
    display: inline-block;
}

form .form-control {
    border-radius: 12px;
    border: 1px solid #dddddd;
    padding: 10px 15px;
    font-size: 14px;
    transition: all 0.3s ease-in-out;
}

form .form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
    outline: none;
}

form .btn-primary {
    background: linear-gradient(135deg, #007bff, #0056b3);
    border: none;
    padding: 12px 20px;
    border-radius: 20px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
    width: 100%;
}

form .btn-primary:hover {
    background: linear-gradient(135deg, #0056b3, #003f8a);
    box-shadow: 0 4px 12px rgba(0, 91, 179, 0.4);
}

form select.form-control {
    color: #555555;
    height: auto;
    transition: background-color 0.3s ease, border-color 0.3s ease;
    margin-bottom: 17px;
}

form select.form-control:focus {
    background-color: #f7f9fc;
    border-color: #007bff;
}

small.text-danger {
    font-size: 12px;
    color: #e74c3c;
}

@media (max-width: 576px) {
    form {
        padding: 20px;
    }

    form .form-control, form .btn-primary {
        font-size: 14px;
    }
}

h4 {
    color: #ffffff;
    font-weight: bold;
}

</style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4 class="text-center">Registrasi Pengguna</h4>
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
