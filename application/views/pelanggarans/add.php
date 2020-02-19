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

            <div class="container-fluid ">

                <!-- Breadcrumbs-->
                <?php $this->load->view('_partials/breadcrumbs'); ?>
                <div class="card mb-3 ">
                    <div class="card-header">
                        <a href="<?php echo base_url() ?>pelanggarans/index"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo base_url() ?>pelanggarans/save" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>NIS</label>
                                <input name="nis" type="number" class="form-control" placeholder="nis">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pelanggaran</label>
                                <input name="tgl_plg" type="date" class="form-control" placeholder="tanggal pelanggaran">
                            </div>
                            <div class="form-group">
                                <label>Id Tatib</label>
                                <input name="id_tatib" type="text" class="form-control" placeholder="id tatib">
                            </div>
                            <div class="form-group">
                                <label>Poin</label>
                                <input name="poin" type="number" class="form-control" placeholder="poin">
                            </div>
                            <div class="form-group">
                                <label>Keterangan Pelanggaran</label>
                                <input name="ket_plg" type="text" class="form-control" placeholder="keterangan">
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <input name="nip" type="number" class="form-control" placeholder="nip">
                            </div>
                            <input class="btn btn-success" type="submit" name="btn" value="Save">
                        </form>
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