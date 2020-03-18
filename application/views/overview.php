<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('_partials/head'); ?>
</head>

<body id="page-top">

  <?php $this->load->view('_partials/top-bar'); ?>


  <div id="wrapper">


    <?php $this->load->view('_partials/side-bar'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <center>
          <h2>Selamat Datang Di Sistem Informasi Bimbingan Konseling </h2>

          <h3><b>Tata Tertib UPT SMPN 2 Pariangan</b></h3>
        </center>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Kategori Sanksi</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Poin</th>
                    <th>Kategori</th>
                    <th>Jenis Peringatan</th>
                    <th>Sanksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>5-30</td>
                    <td>Ringan</td>
                    <td>Peringatan 1</td>
                    <td>Pemanggilan Siswa</td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>31-60</td>
                    <td>Sedang</td>
                    <td>Peringatan 2</td>
                    <td>Pemanggilan Orangtua/Wali Murid</td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>61-100</td>
                    <td>Berat</td>
                    <td>Peringatan 3</td>
                    <td>Pemanggilan Orangtua/Wali Murid dan diberikan skorsing 3-6 hari</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Lebih dari 100</td>
                    <td>Sangat Berat</td>
                    <td>Peringatan 4</td>
                    <td>Dikembalikan kepada orangtua/dikeluarkan dari sekolah</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tata Tertib</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Isi Tata Tertib</th>
                    <th>Bobot Poin</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>1</td>
                    <td>Terlambat masuk seklah 15 menit setelah bel berbunyi</td>
                    <td>5</td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>Tidak mengikuti upacara bendera</td>
                    <td>5</td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>Izin keluar selama proses belejar mengajar(PBM) berlangsung dan tidak kembali kekelas</td>
                    <td>5</td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>Tidak masuk sekolah tanpa keterangan</td>
                    <td>10</td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>Tidak masuk sekolah dengan memberikan keterangan palsu</td>
                    <td>30</td>
                  </tr>

                  <tr>
                    <td>6</td>
                    <td>Meninggalkan kelas hingga proses belajar mengajar (PBM) selesai</td>
                    <td>30</td>
                  </tr>

                  <tr>
                    <td>7</td>
                    <td>Tidak memakai atribut (topi/dasi) saat upacara bendera</td>
                    <td>5</td>
                  </tr>

                  <tr>
                    <td>8</td>
                    <td>Memakai seragam sekolah terlalu ketat</td>
                    <td>20</td>
                  </tr>

                  <tr>
                    <td>9</td>
                    <td>Mengeluarkan kata-kata tidak sopan kepada guru</td>
                    <td>50</td>
                  </tr>

                  <tr>
                    <td>10</td>
                    <td>Berbuat asusila dilingkungan sekolah</td>
                    <td>75</td>
                  </tr>

                  <tr>
                    <td>11</td>
                    <td>Mencuri peralatan sekolah</td>
                    <td>50</td>
                  </tr>

                  <tr>
                    <td>12</td>
                    <td>Mencuri barang milik siswa lain</td>
                    <td>30</td>
                  </tr>

                  <tr>
                    <td>13</td>
                    <td>Membawa HP kesekolah kecuali dalam keadaan tertentu</td>
                    <td>20</td>
                  </tr>

                  <tr>
                    <td>14</td>
                    <td>Memainkan HP saat proses belajar mengajar (PBM) berlangsung</td>
                    <td>30</td>
                  </tr>

                  <tr>
                    <td>15</td>
                    <td>Keluar kelas tanpa izin guru</td>
                    <td>10</td>
                  </tr>

                  <tr>
                    <td>16</td>
                    <td>Keluar lingkungan sekolah tanpa izin guru piket</td>
                    <td>20</td>
                  </tr>

                  <tr>
                    <td>17</td>
                    <td>Mengotori dan mencoret-coret fasilitas sekolah</td>
                    <td>20</td>
                  </tr>

                  <tr>
                    <td>18</td>
                    <td>Merusak fasilitas sekolah</td>
                    <td>30</td>
                  </tr>

                  <tr>
                    <td>19</td>
                    <td>Membawa rokok kedalam lingkungan sekolah</td>
                    <td>25</td>
                  </tr>

                  <tr>
                    <td>20</td>
                    <td>Menghisap rokok dilingkungan sekolah</td>
                    <td>30</td>
                  </tr>

                  <tr>
                    <td>21</td>
                    <td>Tidak masuk sekolah tanpa keterangan</td>
                    <td>10</td>
                  </tr>

                  <tr>
                    <td>22</td>
                    <td>Membawa buku/majalah porno dan lainnya kedalam lingkungan sekolah</td>
                    <td>50</td>
                  </tr>

                  <tr>
                    <td>23</td>
                    <td>Melihat foto dan atau menonton vidio porno dan lainnya dilingkungan sekolah</td>
                    <td>75</td>
                  </tr>

                  <tr>
                    <td>24</td>
                    <td>Membawa senjata tajam kedalam lingkungan sekolah</td>
                    <td>80</td>
                  </tr>

                  <tr>
                    <td>25</td>
                    <td>Membawa senjata tajam dengan sengaja untuk melukai seseorang</td>
                    <td>100</td>
                  </tr>

                  <tr>
                    <td>26</td>
                    <td>Mabuk didalam kelas dan atau lingkungan sekolah</td>
                    <td>100</td>
                  </tr>

                  <tr>
                    <td>27</td>
                    <td>Membawa dan atau menggunakan obat-obatan terlarang dan minuman keras ke lingkungan sekolah</td>
                    <td>100</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

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