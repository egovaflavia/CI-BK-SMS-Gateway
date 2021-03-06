<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head'); ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <center>
                    <img style="widows: 133px; height: 122px" src="<?php echo base_url() ?>/assets/tanahdata.jpeg" alt="">
                </center>
            </div>
            <div class="col-md-6">
                <center>
                    <h4>UNIT PELAYANAN BIMBINGAN KONSELING<br> UPT SMP NEGERI 2 PARIANGAN</h4>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <img src="<?php echo base_url() ?>/assets/smp2.png" alt="">
                </center>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <center>
                    <b>Jln. Raya Sikaladi</b>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <b>Telp. (0752) 5544007</b>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <b>E-Mail: <u>spmn2prg@yahoo.com</u></b>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <b> Kode pos. 27264</b>
                </center>
            </div>
        </div>
        <br>
        <hr>
        <h4>
            <center>Laporan Bimbingan Siswa <br> UPT SMP Negeri 2 Pariangan <br>
                <?php
                echo $tes = $dataminatbakats[0]->ta;
                ?>
            </center>
        </h4>

        <br>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Hari/Tanggal</th>
                        <th>Minat</th>
                        <th>Bakat</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataminatbakats as $no => $dataminatbakat) :
                        // var_dump($databimbingan);
                    ?>
                        <tr>
                            <td><?php echo ++$no ?></td>
                            <td><?php echo $dataminatbakat->nis ?></td>
                            <td><?php echo $dataminatbakat->kelas ?></td>
                            <td><?php echo $dataminatbakat->tgl_mb ?></td>
                            <td><?php echo $dataminatbakat->minat ?></td>
                            <td><?php echo $dataminatbakat->bakat ?></td>
                            <td><?php echo $dataminatbakat->ket_mb ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <!-- <h5 class="align-left">
                Sikaladi, <?php echo date('d-m-Y') ?>
            </h5> -->
            <table>
                <tr>
                    <td style="padding-left: 90px">
                        <h5 class="justify-content-end">
                            <b>Mengetahui,</b><br>
                            Kepala Sekolah UPT SMPN 2 Pariangan
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <u><b>ARDISON ISMAIL, S.Pd</b></u> <br>
                            NIP: 19681112 199412 1 001
                        </h5>
                    </td>
                    <td style="padding-left: 220px">
                        <h5 class="justify-content-end">
                            Sikaladi, <?php echo date('d-m-Y') ?><br>
                            Guru Bimbingan Koneseling
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <u><b>WINDA OCTARIANA, S.Pd.I</b></u> <br>
                            NIP: 196851017 201001 2 302
                        </h5>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>