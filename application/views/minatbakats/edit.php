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
                        <a href="<?php echo base_url() ?>minatbakats/index"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo base_url() ?>minatbakats/update" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>NIS</label>
                                <input value="<?php echo $dataminatbakat->id_mb ?>" name="id" type="hidden">
                                <input name="nis" type="number" class="form-control" placeholder="nis">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Minat Bakat</label>
                                <input value="<?php echo $dataminatbakat->tgl_mb ?>" name="tgl_mb" type="date" class="form-control" placeholder="tanggal">
                            </div>
                            <div class="form-group">
                                <label>Minat</label>
                                <input value="<?php echo $dataminatbakat->minat ?>" name="minat" type="text" class="form-control" placeholder="minat">
                            </div>
                            <div class="form-group">
                                <label>Bakat</label>
                                <input value="<?php echo $dataminatbakat->bakat ?>" name="bakat" type="text" class="form-control" placeholder="bakat">
                            </div>
                            <div class="form-group">
                                <label>Keterangan Minat Bakat</label>
                                <input value="<?php echo $dataminatbakat->ket_mb ?>" name="ket_mb" type="text" class="form-control" placeholder="keterangan">
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <input value="<?php echo $dataminatbakat->nip ?>" name="nip" type="number" class="form-control" placeholder="nip">
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