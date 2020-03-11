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
                        Data Laporan</div>
                    <div class="card-body">
                        <!-- <a href="<?php echo base_url() ?>gurus/add" class="btn btn-primary">Tambah Data</a> -->
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <h4>Laporan Siswa</h4>
                                <a target="_blank" href="<?php echo base_url() ?>laporan/siswa" class="btn btn-success"><span class="fa fa-print"></span> Print</a>
                            </div>
                            <div class="col-md-3">
                                <h4>Laporan Bimbingan</h4>
                                <a target="_blank" href="<?php echo base_url() ?>laporan/bimbingan" class="btn btn-success"><span class="fa fa-print"></span> Print</a>
                            </div>
                            <div class="col-md-3">
                                <h4>Laporan Pelanggaran</h4>
                                <a target="_blank" href="<?php echo base_url() ?>laporan/pelanggaran" class="btn btn-success"><span class="fa fa-print"></span> Print</a>
                            </div>
                            <div class="col-md-3">
                                <h4>Laporan Minat Bakat</h4>
                                <a target="_blank" href="<?php echo base_url() ?>laporan/minatbakat" class="btn btn-success"><span class="fa fa-print"></span> Print</a>
                            </div>
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