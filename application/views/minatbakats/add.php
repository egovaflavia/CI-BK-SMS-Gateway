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
                        <a href="<?php echo base_url() ?>minatbakats/index"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo base_url() ?>minatbakats/save" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Siswa</label>
                                <select name="nis" class="form-control">
                                    <?php foreach ($datasiswas as $datasiswa) : ?>
                                        <option value="<?php echo $datasiswa->nis ?>"><?php echo $datasiswa->nm_siswa ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Minat Bakat</label>
                                <input name="tgl_mb" type="date" class="form-control" placeholder="tanggal">
                            </div>
                            <div class="form-group">
                                <label>Minat</label>
                                <input name="minat" type="text" class="form-control" placeholder="minat">
                            </div>
                            <div class="form-group">
                                <label>Bakat</label>
                                <input name="bakat" type="text" class="form-control" placeholder="bakat">
                            </div>
                            <div class="form-group">
                                <label>Keterangan Minat Bakat</label>
                                <input name="ket_mb" type="text" class="form-control" placeholder="keterangan">
                            </div>
                            <div class="form-group">
                                <label>Guru</label>
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