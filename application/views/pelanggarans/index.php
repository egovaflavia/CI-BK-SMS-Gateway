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
                        <a href="<?php echo site_url('users/add') ?>" class="btn btn-primary">Tambah Data</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Tanggal Pelanggaran</th>
                                        <th>Id _Tatib</th>
                                        <th>Poin</th>
                                        <th>Keterangan Pelanggaran</th>
                                        <th>NIP
                                        <th>Aksi</th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datapelanggarans as $no => $datapelanggaran) : ?>
                                        <tr>
                                            <td><?php echo ++$no ?></td>
                                            <td><?php echo $datapelanggaran->nis ?></td>
                                            <td><?php echo $datapelanggaran->tgl_plg ?></td>
                                            <td><?php echo $datapelanggaran->id_tatib ?></td>
                                            <td><?php echo $datapelanggaran->poin ?></td>
                                            <td><?php echo $datapelanggaran->ket_plg ?></td>
                                            <td><?php echo $datapelanggaran->nip ?></td>
                                            <td width="120px">
                                                <a class="btn btn-warning btn-sm" href="">Edit</a>
                                                <a class="btn btn-danger btn-sm" href="">Hapus</a>
                                            </td>
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