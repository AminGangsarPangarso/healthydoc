    <?php
    if (isset($_SESSION['nip'])) {
        $data = $this->db->get_where('dokter', ['NIP' => $_SESSION['nip']])->row_array();
        $dokter = [
            $nama = $data['NAMA'],
            $tmptlahir = $data['TMPLAHIR'],
            $ttl = $data['TGLLAHIR'],
            $jk = $data['JENKELCUS'],
            $almt = $data['ALAMAT'],
            $foto = $data['IMG'],
            $email = $data['EMAIL'],
            $pass = $data['PASSWORD_DOKTER']
        ];
    }
    ?>
    <div class="home">
        <div class="home-content">
            <div class="card profile" style="margin-right:2rem; margin-top:7rem; margin-left: 4rem;">
                <div align="left" style="margin: 1rem calc(200rem/30);">
                    <form class="row g-2" action="<?= base_url() ?>Admin/updatedokter" method="POST" enctype="multipart/form-data">
                        <div class="col-12">
                            <label for="inputNIP" class="form-label">NIP</label>
                            <input type="text" class="form-control" id="inputID" name="nip" value="<?= $_SESSION['nip'] ?>" readonly="readonly">
                        </div>
                        <div class="col-12">
                            <label for="inputNama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="inputNama" name="nama" value="<?= $nama ?>">
                        </div>
                        <div class="col-5">
                            <label for="inputTTL" class="form-label">Tempat</label>
                            <input type="text" class="form-control" id="inputTTL" name="tempat" value="<?= $tmptlahir ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputTglLahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="inputTglLahir" name="tgllahir" value="<?= $ttl ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="inputGender" class="form-label">Jenis Kelamin</label>
                            <?php
                            if ($jk == 'P') {
                                echo "                                
                                    <section class='form-control' style='height: auto;'>
                                        <div class='form-check form-check-inline'>
                                            <input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio1' value='P' checked>
                                            <label class='form-check-label' for='inlineRadio1'>P</label>
                                        </div>
                                        <div class='form-check form-check-inline'>
                                            <input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio2' value='L'>
                                            <label class='form-check-label' for='inlineRadio2'>L</label>
                                        </div>
                                    </section>
                                ";
                            } else {
                                echo "                                
                                    <section class='form-control' style='height: auto;'>
                                        <div class='form-check form-check-inline'>
                                            <input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio1' value='P'>
                                            <label class='form-check-label' for='inlineRadio1'>P</label>
                                        </div>
                                        <div class='form-check form-check-inline'>
                                            <input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio2' value='L' checked>
                                            <label class='form-check-label' for='inlineRadio2'>L</label>
                                        </div>
                                    </section>
                                ";
                            }
                            ?>
                        </div>
                        <div class="col-md-12">
                            <label for="inputAlamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="inputAlamat" name="alamat" value="<?= $almt ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email" value="<?= $email ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" name="password" value="<?= $pass ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Foto Profile</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" id="fileCover" name="filefoto" value="<?= $foto ?>">
                            </div>
                        </div>
                        <div class="col-12" align="center" style="margin-top: 2rem">
                            <button type="submit" class="btn btn-outline-primary" name="simpan" value="submit">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url('vendor\js') ?>\script.js"></script>
        </body>

        </html>