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
                        <a href="<?php echo site_url('users/add') ?>" class="btn btn-primary">Tambah Data</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>No Hp Orang Tua</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datasiswas as $no => $datasiswa) :
                                        // var_dump($datasiswa);
                                        $jkel = $datasiswa->jekel == "L" ? "Laki-Laki" : "Perempuan";
                                    ?>
                                        <tr>
                                            <td><?php echo ++$no ?></td>
                                            <td><?php echo $datasiswa->nis ?></td>
                                            <td><?php echo $datasiswa->ta ?></td>
                                            <td><?php echo $datasiswa->nm_siswa ?></td>
                                            <td><?php echo $datasiswa->kelas ?></td>
                                            <td><?php echo $jkel ?></td>
                                            <td><?php echo $datasiswa->alamat ?></td>
                                            <td><?php echo $datasiswa->no_hp_ortu ?></td>
                                            <td width="120px">
                                                <a class="btn btn-warning btn-sm" href="">Edit</a>
                                                <a class="btn btn-danger btn-sm" href="">Hapus</a>
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