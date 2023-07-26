<body>


	<div class="home" id="formDashboard">
		<div class="home-content">
			<div class="card mb-3" style="max-width: 540px; max-height:200px; margin: 5rem; display:block">
				<div class="row g-0">
					<div class="col-md-4">
						<div class="row" style="max-width:180px; margin-right:5px">
							<?php $admin = $this->db->get_where('dokter', ['NIP' => $_SESSION['nip']])->row_array(); ?>
							<img src='<?= base_url() ?>asset\image\<?= $admin['IMG'] ?>' alt="edit profile untuk menambah foto" style="max-height:180px;">
						</div>
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">dr. <?= $admin['NAMA']; ?></h5>
							<p class="card-text">NIP <?= $_SESSION['nip']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="card tabel">
				<h2 style="margin-top: 1rem; margin-bottom:1rem; margin-left:1rem;">TABEL REKAM MEDIS ELEKTRONIK</h2>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>NAMA</th>
							<th>NIK</th>
							<th class="size">RME TERCATAT</th>
							<th>KELUHAN</th>
							<th>DIAGNOSA</th>
							<th class="size">TANGGAL PERIKSA</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($riwayat as $row)
							echo "
                                    <tr>
                                        <td width='100'>" . $row['NAMA'] . "</td>
                                        <td width='100'>" . $row['NIK'] . "</td>
                                        <td width='50'>" . $row['TGLRME'] . "</td>
                                        <td width='150'>" . $row['KELUHAN'] . "</td>
                                        <td width='150'>" . $row['DIAGNOSA'] . "</td>
                                        <td width='120'>" . $row['TGL'] . "</td>
                                    </tr>
                                ";
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
<script src="<?php echo base_url('vendor\js') ?>\script.js"></script>

</html>