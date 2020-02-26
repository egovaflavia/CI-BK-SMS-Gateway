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
                        <a href="<?php echo base_url() ?>gurus/index"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo base_url('') ?>gurus/save" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>NIP</label>
                                <input name="nip" type="number" class="form-control" placeholder="nip">
                            </div>
                            <div class="form-group">
                                <label>Nama Guru</label>
                                <input name="nm_guru" type="text" class="form-control" placeholder="nama guru">
                            </div>
                            <div class="form-group">
                                <label>Guru</label>
                                <input name="jabatan" type="text" class="form-control" placeholder="guru">
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