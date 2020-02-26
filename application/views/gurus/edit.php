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
                        <form action="<?php echo base_url('') ?>gurus/update" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>NIP</label>
                                <input value="<?php echo $dataguru->nip  ?>" name="nip" type="number" class="form-control" placeholder="nip" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input value="<?php echo $dataguru->nm_guru  ?>" name="nm_guru" type="text" class="form-control" placeholder="Nama Guru">
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input value="<?php echo $dataguru->jabatan  ?>" name="jabatan" type="text" class="form-control" placeholder="jabatan">
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