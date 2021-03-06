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
                        <a href="<?php echo base_url() ?>users/index"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo base_url() ?>users/simpan" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Username</label>
                                <input name="username" type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="text" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input name="nama" type="text" class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <select name="jabatan" class="form-control">
                                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                                    <option value="Guru">Guru</option>
                                    <option value="Siswa">Siswa</option>
                                </select>
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