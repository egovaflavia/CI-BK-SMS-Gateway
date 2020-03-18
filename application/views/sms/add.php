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
                        <a href="<?php echo base_url() ?>sms/index"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo base_url('') ?>sms/save" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>NIS</label>
                                <select onchange="tampil()" id="siswa" name="nis" class="form-control">
                                    <?php foreach ($datasiswas as $datasiswa) : ?>
                                        <option value="<?php echo $datasiswa->nis ?>"><?php echo $datasiswa->nis . " - " . $datasiswa->nm_siswa ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No Hp Orang Tua</label>
                                <input id="nohp" name="nohp" type="text" class="form-control" readonly>
                            </div>
                            <script>
                                function tampil() {
                                    var barang_terpilih = document.getElementById("siswa").selectedIndex;
                                    var data_barang = <?php echo json_encode($datasiswas); ?>;
                                    var data_terpilih = data_barang[barang_terpilih];
                                    document.getElementById("nohp").value = data_terpilih.no_hp_ortu;
                                }
                                tampil();
                            </script>
                            <div class="form-group">
                                <label>Pesan</label>
                                <textarea class="form-control" name="pesan" cols="30" rows="3"></textarea>
                            </div>
                            <input class="btn btn-success" type="submit" name="btn" value="Send">
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