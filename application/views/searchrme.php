<section class="container" style=" margin-top:150px; margin-bottom:230px">
	<div class="card">
		<div class="card-header">
			<h1>Rekam Medis Digital</h1>
			<p>Masukan Nama dan NIK untuk mencari data rekam medis anda</p>
		</div>
		<div class="card-body ">
			<blockquote class="blockquote mb-0">
				<form class="layout" action="<?= base_url() ?>index.php/healthydoc/rme" method="POST">

					<div>
						<label class="f-4">Nama Lengkap</label>
						<input class="form-control" name="nama" placeholder="Masukkan nama lengkap">
					</div>
					<div>
						<label class="f-4">NIK</label>
						<input class="form-control" name="NIK" placeholder="Masukkan NIK">
					</div>
					<div id="" class="" style=" margin-top:30px; ">

						<button type="submit" class="btn btn-primary" name="kirim">SEARCH</button>
					</div>

				</form>
			</blockquote>

		</div>
	</div>
</section>