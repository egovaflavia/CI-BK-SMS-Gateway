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
                        Data Siswa</div>
                    <div class="card-body">
                        <a href="<?php echo base_url() ?>gurus/add" class="btn btn-primary">Tambah Data</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datagurus as $no => $dataguru) :
                                        // var_dump($dataguru);
                                    ?>
                                        <tr>
                                            <td><?php echo ++$no ?></td>
                                            <td><?php echo $dataguru->nip ?></td>
                                            <td><?php echo $dataguru->nm_guru ?></td>
                                            <td><?php echo $dataguru->jabatan ?></td>
                                            <td width="120px">
                                                <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>gurus/edit/<?php echo $dataguru->nip ?>">Edit</a>
                                                <a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>gurus/delete/<?php echo $dataguru->nip ?>">Hapus</a>
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