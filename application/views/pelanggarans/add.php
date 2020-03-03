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
                    <div class="card-body">

                        <form action="<?php echo base_url() ?>pelanggarans/save" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Siswa yang Melanngar</label>
                                <select name="nis" class="form-control">
                                    <?php foreach ($datasiswas as $datasiswa) : ?>
                                        <option value="<?php echo $datasiswa->nis ?>"><?php echo $datasiswa->nm_siswa ?> | <?php echo $datasiswa->nis ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pelanggaran</label>
                                <input name="tgl_plg" type="date" class="form-control" placeholder="tanggal pelanggaran">
                            </div>
                            <div class="form-group">
                                <label>Pelanggaran Tata Tertib</label>
                                <select name="id_tatib" class="form-control">
                                    <?php foreach ($datatatibs as $datatatib) :
                                        var_dump($datatatib); ?>
                                        <option value="<?php echo $datatatib->id_tatib ?>"><?php echo $datatatib->tatib ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Keterangan Pelanggaran</label>
                                <input name="ket_plg" type="text" class="form-control" placeholder="keterangan">
                            </div>
                            <div class="form-group">
                                <label>Guru yang Manangani</label>
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