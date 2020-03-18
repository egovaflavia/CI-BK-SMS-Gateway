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
                        Data Minat Bakat</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama Siswa</th>
                                        <th>Tanggal Minat dan Bakat</th>
                                        <th>Minat</th>
                                        <th>Bakat</th>
                                        <th>Keterangan Minat Bakat</th>
                                        <th>NIP</th>
                                        <th>Nama Guru</th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataminatbakats as $no => $dataminatbakat) : ?>
                                        <tr>
                                            <td><?php echo ++$no ?></td>
                                            <td><?php echo $dataminatbakat->nis ?></td>
                                            <td><?php echo $dataminatbakat->nm_siswa ?></td>
                                            <td><?php echo $dataminatbakat->tgl_mb ?></td>
                                            <td><?php echo $dataminatbakat->minat ?></td>
                                            <td><?php echo $dataminatbakat->bakat ?></td>
                                            <td><?php echo $dataminatbakat->ket_mb ?></td>
                                            <td><?php echo $dataminatbakat->nip ?></td>
                                            <td><?php echo $dataminatbakat->nm_guru ?></td>
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