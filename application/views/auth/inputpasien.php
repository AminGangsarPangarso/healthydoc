    <div class="home">
        <div class="home-content">
            <div class="card profile" style="margin-right:2rem; margin-top:7rem; margin-left: 4rem;">
                <div align="left" style="margin: 1rem calc(200rem/30);">
                    <form class="row g-2" action="<?php echo base_url('Admin/AksiInsert')  ?>" method="POST" enctype="multipart/form-data">
                        <div class="col-12">
                            <label for="inputNIP" class="form-label">NIK</label>
                            <input name="nik" id="inputID" class="form-control" type="number" placeholder="16-Digit Angka">
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
                            <section class="form-control" style="height: auto;">
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
                        <div class="col-12" align="center" style="margin-top: 2rem">
                            <button type="submit" class="btn btn-outline-primary" name="input" value="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url('vendor\js') ?>\script.js"></script>
        </body>

        </html>