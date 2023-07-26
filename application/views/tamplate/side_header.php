<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!----===== Boxicons CSS ===== -->
	<link rel="icon" href="<?php echo base_url('asset\image\logo.png') ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

	<!-- JS Jquery -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

	<title><?= $title ?></title>
</head>

<body>
	<nav class="sidebar">
		<header>
			<div class="image-text">
				<span class="image">
					<img class="big" src="<?php echo base_url('vendor\assets') ?>\logo.png" alt="">
					<img class="mini" src="<?php echo base_url('vendor\assets') ?>\logo-mini.png" alt="">
				</span>
			</div>
		</header>
		<div class="menu-bar">
			<div class="menu">
				<ul class="menu-links">
					<li class="nav-link aktif">
						<a href="<?= base_url() ?>admin/">
							<i class='bx bx-home-alt icon'></i>
							<span class="text nav-text">Dashboard</span>
						</a>
					</li>

					<li class="nav-link">
						<a href="<?= base_url('admin/') ?>dokter">
							<i class='bx bx-user icon'></i>
							<span class="text nav-text">Profile</span>
						</a>
					</li>

					<li class="nav-link">
						<a href="<?= base_url('admin/') ?>inputPasien">
							<i class='bx bx-user-plus icon'></i>
							<span class="text nav-text">Input Pasien</span>
						</a>
					</li>

					<li class="nav-link">
						<a href="<?= base_url('admin/') ?>dttabel">
							<i class='bx bx-grid-alt icon'></i>
							<span class="text nav-text">Tabel Pasien</span>
						</a>
					</li>

					<li class="nav-link">
						<a href="<?= base_url('admin/') ?>inputRME">
							<i class='bx bx-edit-alt icon'></i>
							<span class="text nav-text">Input Data RME</span>
						</a>
					</li>

				</ul>
			</div>
			<div class="bottom-content">
				<li class="">
					<a href="<?= base_url('admin/') ?>logout">
						<i class='bx bx-log-out icon'></i>
						<span class="text nav-text">Logout</span>
					</a>
				</li>

				<li class="mode">
					<div class="sun-moon">
						<i class='bx bx-moon icon moon'></i>
						<i class='bx bx-sun icon sun'></i>
					</div>
					<span class="mode-text text">Dark mode</span>

					<div class="toggle-switch">
						<span class="switch"></span>
					</div>
				</li>
			</div>
		</div>
	</nav>
	<section class="home">
		<nav>
			<div class="image-text">
				<i class='bx bx-chevron-left toggle'></i>
				<span class="name"><?= $title ?></span>
			</div>
			<div class="dropdown">
				<div class="profile-details">
					<?php $admin = $this->db->get_where('dokter', ['NIP' => $_SESSION['nip']])->row_array(); ?>
					<img src="<?= base_url() ?>asset\image\<?= $admin['IMG'] ?>" alt="">
					<span class="admin_name">dr. <?= $admin['NAMA']; ?></span>
					<i class='bx bx-chevron-down'></i>
				</div>
				<div class="dropdown-content">
					<a class="dropdown-item" href="<?= base_url('admin/') ?>dokter">
						<i class='bx bx-user' style="font-size: 1.5rem;"></i> Profile</a>
				</div>
			</div>
		</nav>

	</section>