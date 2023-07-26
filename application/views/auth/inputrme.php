<div class="home">

	<div class="home-content">
		<div class="card profile" style="margin-right:2rem; margin-top:7rem; margin-left: 4rem;">
			<div align="left" style="margin: 1rem calc(200rem/30);">
				<form class="row g-2" action="<?= base_url() ?>Admin/InsertRME" method="POST" enctype="multipart/form-data">
					<div class="col-12">
						<label for="inputNIP" class="form-label">NIK Pasien</label>
						<select name="nik" id="inputID" class="form-select form-select-lg mb-1" style="height:2.5rem; font-size:1rem">
							<option>NIK</option>
							<?php
							foreach ($pasien as $data)
								echo "
                                        <option value=$data[NIK]>$data[NIK] || $data[NAMA]</option>
                                    ";
							?>
						</select>
					</div>
					<div class="col-12">
						<label for="inputNama" class="form-label">Keluhan</label>
						<input type="text" class="form-control" id="inputKeluhan" name="Klhn">
					</div>
					<div class="col-12">
						<label for="inputTTL" class="form-label">Diagnosa</label>
						<input type="text" class="form-control" id="inputTTL" name="diagnosa">
					</div>
					<div class="col-md-12">
						<label for="inputAlamat" class="form-label">Tindakan</label>
						<input type="text" class="form-control" id="inputAlamat" name="tindakan">
					</div>
					<div class="col-md-6">
						<label for="inputTglLahir" class="form-label">Tanggal Pemeriksaan Dokter</label>
						<input type="date" class="form-control" id="inputTglLahir" name="tglperiksa">
					</div>
					<div class="col-6">
						<label for="inputNIP" class="form-label">Tangal Rekam Medis Tercatat</label>
						<input type="date" class="form-control" id="inputID" name="tglrme" value="">
					</div>
					<div class="col-12">
						<label for="inputNIP" class="form-label">NIP Dokter</label>
						<input type="text" class="form-control" id="inputID" name="nip" value="<?= $_SESSION['nip'] ?>" readonly="readonly">
					</div>
					<div class="col-12" align="center" style="margin-top: 2rem">
						<button onclick="checkInput()" type="submit" class="btn btn-outline-primary" name="simpan" value="submit">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url('vendor\js') ?>\script.js">

	</script>
	</body>
	<script>
		function checkInput() {
			const keluhanInput = document.getElementById("inputKeluhan");
			const diagnosaInput = document.getElementById("inputTTL");
			const tindakanInput = document.getElementById("inputAlamat");

			// Check input length and show warning message if it exceeds the limit
			const maxInputLength = 2; // Batas limit input, dalam hal ini 5 karakter
			if (keluhanInput.value.length > maxInputLength || diagnosaInput.value.length > maxInputLength || tindakanInput.value.length > maxInputLength) {
				if (paymentSuccess) {
					alert("Maaf, batas limit input untuk Keluhan, Diagnosa, dan Tindakan adalah 5 karakter. Harap bayar terlebih dahulu.");
				} else {
					alert("Maaf, batas limit input untuk Keluhan, Diagnosa, dan Tindakan adalah 5 karakter.");
				}
				return;
			}

			// If everything is fine, you can submit the form here
			// For example, you can call a function to send the form data to the server
			// YourFormSubmitFunction();
			document.getElementById("formDashboard").submit();
		}

		// Fungsi ini akan dipanggil saat pembayaran berhasil dilakukan.
		function paymentSuccessCallback() {
			paymentSuccess = true;
			alert("Pembayaran sukses! Anda dapat memasukkan input lagi.");
		}

		// Fungsi ini akan dipanggil jika pembayaran gagal atau dibatalkan.
		function paymentFailedCallback() {
			paymentSuccess = false;
			alert("Pembayaran gagal atau dibatalkan. Harap bayar terlebih dahulu untuk melanjutkan input.");
		}
	</script>



	</html>