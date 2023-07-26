<!DOCTYPE html>
<html lang="en">
<head>
    <title>HealthyDOC | Register</title>
    <link rel="icon" href="<?php echo base_url('asset\image/logo.png') ?>">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="<?php echo base_url('asset\css\log.css') ?>" rel="stylesheet">
</head>
<body class="bg">
    <?php echo"<script>alert('Halaman Registerasi!!! Hanya Dokter yang memiliki otoritas melalukan Register')</script>" ?>
    <div  id="Regist" class="card">
        <h5 class="card-header"><img src="<?php echo base_url('asset\image/logo.png') ?>" alt="Logo" width="auto" height="50" class="d-inline-block align-text-center">
        Halaman Login & Register</h5>
        <div class="card-body">
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login">Login</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body" align="left">
                    <form class="row g-2" action="<?php echo base_url('healthydoc/Register')  ?>" method="POST" enctype="multipart/form-data">
                        <h5 class="card-title" align="center">Register</h5>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" name="password">
                        </div>
                        <div class="col-12">
                            <label for="inputNIP" class="form-label">NIP</label>
                            <input type="text" class="form-control" id="inputID" name="nip" max="16">
                        </div>
                        <div class="col-12">
                            <label for="inputNama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="inputNama" name="nama">
                        </div>
                        <div class="col-5">
                            <label for="inputTTL" class="form-label">Tempat Tanggal Lahir</label>
                            <input type="text" class="form-control" id="inputTTL" name="tempat">
                        </div>
                        <div class="col-md-4">
                            <label for="inputTglLahir" class="form-label">.</label>
                            <input type="date" class="form-control" id="inputTglLahir" name="tgllahir">
                        </div>
                        <div class="col-md-3">
                            <label for="inputGender" class="form-label">Jenis Kelamin</label>
                            <section class="form-control">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="P">
                                    <label class="form-check-label" for="inlineRadio1">P</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="L">
                                    <label class="form-check-label" for="inlineRadio2">L</label>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-12">
                            <label for="inputAlamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="inputAlamat" name="alamat">
                        </div>
                        <div class="col-12" align="center">
                            <button type="submit" class="btn btn-outline-primary" name="submit" value="submit">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    Kembali ke- <a href="<?= base_url()?>">Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>