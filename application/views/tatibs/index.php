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
                        Data Tata Tertib</div>
                    <div class="card-body">
                        <a href="<?php echo base_url() ?>tatibs/add" class="btn btn-primary">Tambah Data</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tata Tertib</th>
                                        <th>Bobot Poin</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tatibs as $no => $tatib) : ?>
                                        <tr>
                                            <td><?php echo ++$no ?></td>
                                            <td><?php echo $tatib->tatib ?></td>
                                            <td><?php echo $tatib->b_poin ?></td>
                                            <td width="120px">
                                                <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>tatibs/edit/<?php echo $tatib->id_tatib ?>">Edit</a>
                                                <a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>tatibs/delete/<?php echo $tatib->id_tatib ?>">Hapus</a>

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