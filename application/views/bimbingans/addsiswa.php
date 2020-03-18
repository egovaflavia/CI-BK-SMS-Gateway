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
                        <a href="<?php echo base_url() ?>bimbingans/index"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <?php //var_dump($datagurus) 
                        ?>
                        <form action="<?php echo base_url() ?>bimbingans/save" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Siswa yang Bimbingan</label>
                                <input name="nis" type="text" class="form-control" value="<?php echo $this->session->userdata('user_logged')->username ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Bimbingan</label>
                                <input name="tg_bim" type="date" class="form-control" placeholder="tg_bim">
                            </div>
                            <div class="form-group">
                                <label>Permasalahan</label>
                                <input name="permasalahan" type="text" class="form-control" placeholder="permasalahan">
                            </div>
                            <div class="form-group">
                                <!-- <label>Penyelesaian</label> -->
                                <input value="Harap Segera Di Proses" name="penyelesaian" type="hidden" class="form-control" placeholder="penyelesaian">
                            </div>
                            <input name="ket_bim" type="hidden" value="Belum di Proses" class="form-control">
                            <!-- <div class="form-group">
                                <label>Keterangan Bimbingan</label>
                                <select name="ket_bim" class="form-control">
                                    <option value="Proses">Proses</option>
                                    <option value="Belum di Proses">Belum di Proses</option>
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label>Guru yang Menangani</label>
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