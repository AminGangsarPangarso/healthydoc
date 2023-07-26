<head>
	<title>HealthyDOC | RME</title>
	<link rel="icon" href="<?php echo base_url('asset/image/logo.png') ?>">
	<!-- CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url('asset/css/') ?>footer.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>


<nav class=" container navbar navbar-expand-lg ">
	<div class="container-fluid">
		<!-- Brand -->
		<a class="navbar-brand" href="#">
			<img src="<?php echo base_url('asset\image\header.png') ?>" alt="Logo" width="auto" height="50" class="d-inline-block align-text-top">
		</a>

		<!-- Toggle Button -->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navbar Items -->
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url() ?>index.php/healthydoc/price" class="nav-link" id="harga-1">Harga</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Layanan
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="<?= base_url() ?>index.php/healthydoc/pencariandatarme">Pencarian Data</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<!-- Login Button -->
					<a href="<?= base_url() ?>index.php/healthydoc/login" class="nav-link">
						<button class="btn">Login </button>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>


<!-- <nav class=" navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-menu d-flex justify-content-between " id="navbarNavDropdown">
      <ul class="navbar-nav">
    
		 <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
        <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
			
      </ul>
	  
    </div>
  </div>
</nav> -->