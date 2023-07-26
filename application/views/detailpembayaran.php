<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-fZzSOY1XL-yd2Hyx"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>

<body>

	<div class="container mt-5">

		<h2>Data Pembayaran Healthydoc</h2>

		<form id="payment-form" method="post" action="<?= site_url() ?>/snap/finish">
			<input type="hidden" name="result_type" id="result-type" value="">
			<input type="hidden" name="result_data" id="result-data" value="">
			<label for="nama">Nama </label>
			<div class="form-group">
				<input type="text" class="form-control" name="nama" id="nama">
			</div>
			<label for="pelayanan" class="mt-4">Jenis Pelayanan </label>
			<div class="form-group">
				<select name="pelayanan" class="form-control" id="pelayanan">
					<option value="rekam medis">Rekam medis</option>
					<option value="rekam data">Rekam data</option>
					<option value="rekam pasien">Rekam pasien</option>
				</select>
			</div>
			<label for="jmlbayar" class="mt-4">Jumlah bayar </label>
			<div class="form-group">
				<input type="text" class="form-control" name="jmlbayar" id="jmlbayar">
			</div>
			<button id="pay-button" class="btn btn-primary mt-4">Bayar</button>
		</form>
		<hr>

		<table class="table">
			<thead>
				<tr>
					<th scope="col">Order Id</th>
					<th scope="col">Gross Amount</th>
					<th scope="col">Payment Type</th>
					<th scope="col">Bank</th>
					<th scope="col">Va Number</th>
					<th scope="col">Transaction Time</th>
					<th scope="col">Aksi</th>
					<th scope="col">Pdf Url</th>
				</tr>
			</thead>
			<tbody>

				<?php if (!empty($result)) { ?>
					<?php foreach ($result as $d) { ?>
						<tr>
							<td><?php echo $d->order_id; ?></td>
							<td><?php echo $d->gross_amount; ?></td>
							<td><?php echo $d->payment_type; ?></td>
							<td><?php echo $d->bank; ?></td>
							<td><?php echo $d->va_number; ?></td>
							<td><?php echo $d->transaction_time; ?></td>
							<td>
								<?php
								if ($d->status_code == '200') {
								?>
									<span for="" class="btn bg-success btn-sm">Success</span>
								<?php
								} else {
								?>
									<span for="" class="btn bg-warning btn-sm">Pending</span>
								<?php
								}
								?>
							</td>
							<td>
								<a href="<?php echo $d->pdf_url; ?>" target="_blank" class="btn btn-success btn-sm">Download</a>
							</td>
						</tr>
					<?php } ?>
				<?php } else { ?>
					<tr>
						<td colspan="8">Tidak ada data pembayaran.</td>
					</tr>
				<?php } ?>

			</tbody>
		</table>

		<script type="text/javascript">
			$('#pay-button').click(function(event) {
				event.preventDefault();
				$(this).attr("disabled", "disabled");

				var nama = $("#nama").val()
				var pelayanan = $("#pelayanan").val()
				var jmlbayar = $("#jmlbayar").val()


				$.ajax({
					type: 'POST',
					data: {
						nama: nama,
						pelayanan: pelayanan,
						jmlbayar: jmlbayar
					},
					url: '<?= site_url() ?>/snap/token',
					cache: false,

					success: function(data) {
						//location = data;

						console.log('token = ' + data);

						var resultType = document.getElementById('result-type');
						var resultData = document.getElementById('result-data');

						function changeResult(type, data) {
							$("#result-type").val(type);
							$("#result-data").val(JSON.stringify(data));
							//resultType.innerHTML = type;
							//resultData.innerHTML = JSON.stringify(data);
						}

						snap.pay(data, {

							onSuccess: function(result) {
								changeResult('success', result);
								console.log(result.status_message);
								console.log(result);
								$("#payment-form").submit();
							},
							onPending: function(result) {
								changeResult('pending', result);
								console.log(result.status_message);
								$("#payment-form").submit();
							},
							onError: function(result) {
								changeResult('error', result);
								console.log(result.status_message);
								$("#payment-form").submit();
							}
						});
					}
				});
			});
		</script>

	</div>
	<!-- <div class="d-flex justify-content-center aling-items-center">
		<form>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1">
			</div>
			<div class="mb-3 form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<button type="submit" class="btn btn-primary">Bayar</button>
		</form>
	</div> -->
</body>

</html>