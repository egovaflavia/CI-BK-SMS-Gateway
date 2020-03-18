<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head'); ?>
</head>

<body id="page-top">

    <?php $this->load->view('_partials/top-bar'); ?>


    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('_partials/side-bar'); ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <?php $this->load->view('_partials/breadcrumbs'); ?>
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Data Pelanggaran</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Poin Siswa</th>
                                        <th>Tata Tertib</th>
                                        <th>Poin Pelanggaran</th>
                                        <th>Tanggal Pelanggaran</th>
                                        <th>Keterangan Pelanggaran</th>
                                        <th>Sanksi</th>
                                        <th>Nama Guru</th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datapelanggarans as $no => $datapelanggaran) :
                                        //var_dump($datapelanggaran);
                                    ?>
                                        <tr>
                                            <td><?php echo ++$no ?></td>
                                            <td><?php echo $datapelanggaran->nm_siswa ?></td>
                                            <td><?php echo $datapelanggaran->point ?></td>
                                            <td><?php echo $datapelanggaran->tatib ?></td>
                                            <td><?php echo $datapelanggaran->b_poin ?></td>
                                            <td><?php echo $datapelanggaran->tgl_plg ?></td>
                                            <td><?php echo $datapelanggaran->ket_plg ?></td>
                                            <td>
                                                <?php if ($datapelanggaran->b_poin >= 5 &&  $datapelanggaran->b_poin <= 5) {
                                                    echo 'Pemanggilan Siswa';
                                                } elseif ($datapelanggaran->b_poin >= 31 &&  $datapelanggaran->b_poin <= 60) {
                                                    echo 'Pemanggilan Orang Tua';
                                                } elseif ($datapelanggaran->b_poin >= 61 &&  $datapelanggaran->b_poin <= 100) {
                                                    echo 'Pemanggilan Orang Tua & Skorsing';
                                                } else {
                                                    echo 'Di Keluarkan ke Orang Tua';
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $datapelanggaran->nm_guru ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <?php $this->load->view('_partials/footer'); ?>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php $this->load->view('_partials/modal'); ?>

    <?php $this->load->view('_partials/scripts'); ?>

</body>

</html>