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
                        <a href="<?php echo base_url() ?>bimbingans/index"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo base_url() ?>bimbingans/update" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>NIS</label>
                                <input value="<?php echo $databimbingan->id_bimbingan ?>" name="id" type="hidden">
                                <input value="<?php echo $databimbingan->nis ?>" name="nis" type="number" class="form-control" placeholder="nis">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Bimbingan</label>
                                <input value="<?php echo $databimbingan->tg_bim ?>" name="tg_bim" type="date" class="form-control" placeholder="tg_bim">
                            </div>
                            <div class="form-group">
                                <label>Permasalahan</label>
                                <input value="<?php echo $databimbingan->permasalahan ?>" name="permasalahan" type="text" class="form-control" placeholder="permasalahan">
                            </div>
                            <div class="form-group">
                                <label>Penyelesaian</label>
                                <input value="<?php echo $databimbingan->penyelesaian ?>" name="penyelesaian" type="text" class="form-control" placeholder="penyelesaian">
                            </div>
                            <div class="form-group">
                                <label>Keterangan Bimbingan</label>
                                <input value="<?php echo $databimbingan->ket_bim ?>" name="ket_bim" type="text" class="form-control" placeholder="ket_bim">
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <input value="<?php echo $databimbingan->nip ?>" name="nip" type="number" class="form-control" placeholder="nip">
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