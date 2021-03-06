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
                    <?php //var_dump($datasiswas) 
                    ?>
                    <div class="card-body">
                        <form action="<?php echo base_url() ?>pelanggarans/update" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>NIS</label><select name="nis" class="form-control">
                                    <?php foreach ($datasiswas as $datasiswa) : ?>
                                        <option value="<?php echo $datasiswa->nis ?>"><?php echo $datasiswa->nm_siswa ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pelanggaran</label>
                                <input value="<?php echo $datapelanggaran->tgl_plg ?>" name="tgl_plg" type="date" class="form-control" placeholder="tanggal pelanggaran">
                                <input value="<?php echo $datapelanggaran->id_pelanggaran ?>" name="id" type="hidden" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Id Tatib</label>
                                <input value="<?php echo $datapelanggaran->id_tatib ?> " name=" id_tatib" type="text" class="form-control" placeholder="id tatib">
                            </div>
                            <div class="form-group">
                                <label>Keterangan Pelanggaran</label>
                                <select name="ket_plg" class="form-control">
                                    <option value="Proses">Proses</option>
                                    <option value="Belum di Proses">Belum di Proses</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <select name="nip" class="form-control">
                                    <?php foreach ($datagurus as $dataguru) : ?>
                                        <option value="<?php echo $dataguru->nip ?>"><?php echo $dataguru->nm_guru ?></option>
                                    <?php endforeach ?>
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