<!DOCTYPE html>
<html lang="en">

<body>
	<section class="container" style=" margin-top:150px; margin-bottom:230px">
		<div class="card">
			<div class="card-header">
				<h1>Rekam Medis Digital</h1>
				<p>Rekam Medis Anda ditemukan</p>
			</div>
			<div class="card-body ">
				<blockquote class="blockquote mb-0">
					<form class="layout" action="<?= base_url() ?>index.php/healthydoc/rme" method="POST">
						<div>
							<label class="f-1">Nama Lengkap</label>
							<input class="form-control" name="nama" placeholder="Masukkan nama lengkap" value="<?php echo $_SESSION['nama'] ?>" readonly="readonly">
						</div>
						<div>
							<label class="f-1">NIK</label>
							<input class="form-control" name="NIK" placeholder="Masukkan NIK" value="<?php echo $_SESSION['nik'] ?>" readonly="readonly">
						</div>
						<div id="" class="" style=" margin-top:30px; ">
							<button class="btn btn-primary" type="button" name="kirim" data-bs-toggle="modal" data-bs-target="#exampleModal">BUKA DATA</button>
						</div>
					</form>
					<div class="modal fade" id="exampleModal" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
									<a href="<?= base_url() ?>index.php/healthydoc">
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</a>
								</div>
								<div class="modal-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>NAMA</th>
												<th>RME TERCATAT</th>
												<th>KELUHAN</th>
												<th>DIAGNOSA</th>
												<th>TANGGAL PERIKSA</th>
												<th>DOKTER</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($rme as $data)
												echo "
                                                    <tr>
                                                        <td width='100'>" . $data['NAMA'] . "</td>
                                                        <td width='50'>" . $data['TGLRME'] . "</td>
                                                        <td width='125'>" . $data['KELUHAN'] . "</td>
                                                        <td width='125'>" . $data['DIAGNOSA'] . "</td>
                                                        <td width='50'>" . $data['TGL'] . "</td>
                                                        <td width='100'>" . $data['DOKTER'] . "</td>
                                                    </tr>
                                                ";
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</blockquote>
			</div>
		</div>
	</section>
</body>

</html>
