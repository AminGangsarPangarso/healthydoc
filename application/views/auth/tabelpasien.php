    <div class="home">
        <div class="home-content">
            <div class="card tabel" style="margin-right:2rem; margin-top:7rem; margin-left: 4rem;">
                <div align="left" style="margin: 1rem calc(100rem/30);">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <div style="margin: 2rem;">
                            <a href="<?= base_url('admin/') ?>inputPasien" class="btn btn-primary" style="margin-left: -2rem;">+ Input Data Pasien</a>
                        </div>
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>NAMA</th>
                                <th>TANGGAL LAHIR</th>
                                <th>JENIS KELAMIN</th>
                                <th>ALAMAT</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($pasien as $row)
                                echo "
                                    <tr>
                                        <td width='50'>" . $row['NIK'] . "</td>
                                        <td width='150'>" . $row['NAMA'] . "</td>
                                        <td width='50'>" . $row['TGLLAHIR'] . "</td>
                                        <td width='50'>" . $row['JENKELCUS'] . "</td>
                                        <td width='100'>" . $row['ALAMAT'] . "</td>
                                        <td width='120'> 
                                            <a class='btn btn-info' href='" . base_url('admin/pasien?nik=') . "" . $row['NIK'] . "'>Edit</a> 
                                            <a class='btn btn-danger' href='" . base_url('admin/AksiDelete?nik=') . "" . $row['NIK'] . "'>Hapus</a> 
                                        </td>
                                    </tr>
                                ";
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
        <script src="<?php echo base_url('vendor\js') ?>\script.js"></script>
        </body>

        </html>