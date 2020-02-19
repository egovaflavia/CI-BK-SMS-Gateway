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
                        <a href="<?php echo base_url() ?>siswas/save"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo base_url('') ?>siswas/save" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>NIS</label>
                                <input name="nis" type="number" class="form-control" placeholder="nis">
                            </div>
                            <div class="form-group">
                                <label>Tahun Ajaran</label>
                                <input name="ta" type="text" class="form-control" placeholder="ta">
                            </div>
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input name="nama" type="text" class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input name="kelas" type="text" class="form-control" placeholder="kelas">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input name="jekel" type="text" class="form-control" placeholder="jekel">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input name="alamat" type="text" class="form-control" placeholder="alamat">
                            </div>
                            <div class="form-group">
                                <label>NO HP Orang TUa</label>
                                <input name="no_hp" type="number" class="form-control" placeholder="no hp">
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