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
                        Data Bimbingan</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- <a href="<?php echo base_url() ?>bimbingans/addsiswa" class="btn btn-primary">Tambah Data</a>
                            <br>
                            <br> -->
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama Siswa</th>
                                        <th>Tanggal Bimbingan</th>
                                        <th>Permasalhan</th>
                                        <th>Penyelesaian</th>
                                        <th>Keterangan Bimbingan</th>
                                        <th>NIP</th>
                                        <th>Nama Guru</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($databimbingans as $no => $databimbingan) : ?>
                                        <tr>
                                            <td><?php echo ++$no ?></td>
                                            <td><?php echo $databimbingan->nis ?></td>
                                            <td><?php echo $databimbingan->nm_siswa ?></td>
                                            <td><?php echo $databimbingan->tg_bim ?></td>
                                            <td><?php echo $databimbingan->permasalahan ?></td>
                                            <td><?php echo $databimbingan->penyelesaian ?></td>
                                            <td><?php echo $databimbingan->ket_bim ?></td>
                                            <td><?php echo $databimbingan->nip ?></td>
                                            <td><?php echo $databimbingan->nm_guru ?></td>
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