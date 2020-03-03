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
                    <h4>UNIT PELAYANAN BIMBINGAN KONSELING <br> UPT SMP NEGERI 2 PARIANGAN</h4>
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
        <hr style="">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Tahun Ajaran</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No Hp Orang Tua</th>
                        <th>Poin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datasiswas as $no => $datasiswa) :
                        // var_dump($datasiswa);
                        $jkel = $datasiswa->jekel == "L" ? "Laki-Laki" : "Perempuan";
                    ?>
                        <tr>
                            <td><?php echo ++$no ?></td>
                            <td><?php echo $datasiswa->nis ?></td>
                            <td><?php echo $datasiswa->ta ?></td>
                            <td><?php echo $datasiswa->nm_siswa ?></td>
                            <td><?php echo $datasiswa->kelas ?></td>
                            <td><?php echo $jkel ?></td>
                            <td><?php echo $datasiswa->alamat ?></td>
                            <td><?php echo $datasiswa->no_hp_ortu ?></td>
                            <td><?php echo $datasiswa->point ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>