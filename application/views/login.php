<!DOCTYPE html>
<html lang="en">

<head>
	<title>HealthyDOC | Login Page</title>
	<link rel="icon" href="<?php echo base_url('asset\image/logo.png') ?>">
	<!-- CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	<link href="<?php echo base_url('asset\css\log.css') ?>" rel="stylesheet">
</head>

<body class="bg">
	<?php echo "<script>alert('Halaman Login!!! Hanya Dokter yang memiliki otoritas untuk Login')</script>" ?>
	<div id="Login" class="card">
		<h5 class="card-header"><img src="<?php echo base_url('asset/image/logo.png') ?>" alt="Logo" width="auto" height="50" class="d-inline-block align-text-center">
			Halaman Login & Register</h5>
		<div class="card-body">
			<div class="card text-center">
				<div class="card-header">
					<ul class="nav nav-pills card-header-pills">
						<li class="nav-item">
							<a class="nav-link active" href="regist">Register</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Login</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<h5 class="card-title">Login</h5>
					<p class="card-text">Masukkan Data Dengan Benar</p>
					<form method="POST" action="<?= base_url('healthydoc/login') ?>">
						<div class="row mb-3">
							<label for="inputNIP" class="col-sm-2 col-form-label">NIP</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="namalengkap" placeholder="NIP" name="NIP">
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
							</div>
						</div>

						<div class="row mb-3">
							<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
							</div>
						</div>
						<button type="submit" name="Submit" class="btn btn-outline-primary" value="login">Sign in</button>
					</form>
				</div>
				<div class="card-footer text-muted">
					Kembali ke- <a href="<?= base_url() ?>">Halaman Utama</a>
				</div>
			</div>
		</div>
	</div>
</body>

</html>