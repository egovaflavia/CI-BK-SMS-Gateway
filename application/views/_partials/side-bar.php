<ul class="sidebar navbar-nav">

    <?php if ($_SESSION['user_logged']->jabatan == "Siswa") : ?>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url() ?>">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>bimbingans/persiswa">
                <i class="fas fa-fw fa-book"></i>
                <span>Data Bimbingan</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>pelanggarans/persiswa">
                <i class="fas fa-fw fa-bullhorn"></i>
                <span>Data Pelanggaran</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>minatbakats/persiswa">
                <i class="fas fa-fw fa-child"></i>
                <span>Data Minat dan Bakat</span></a>
        </li>
    <?php endif ?>
    <?php if ($_SESSION['user_logged']->jabatan == "Kepala Sekolah") : ?>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url() ?>">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>tatibs">
                <i class="fas fa-fw fa-bars"></i>
                <span>Data Tata Tertib</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>laporan/index">
                <i class="fas fa-fw fa-briefcase"></i>
                <span>Laporan</span></a>
        </li>
    <?php endif ?>
    <?php if ($_SESSION['user_logged']->jabatan == "Guru BK") : ?>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url() ?>">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>users">
                <i class="fas fa-fw fa-users"></i>
                <span>Data User</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>gurus">
                <i class="fas fa-fw fa-bars"></i>
                <span>Data Guru</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>tatibs">
                <i class="fas fa-fw fa-bars"></i>
                <span>Data Tata Tertib</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>siswas">
                <i class="fas fa-fw  fa-address-card"></i>
                <span>Data Siswa</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>bimbingans">
                <i class="fas fa-fw fa-book"></i>
                <span>Data Bimbingan</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>pelanggarans">
                <i class="fas fa-fw fa-bullhorn"></i>
                <span>Data Pelanggaran</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>minatbakats">
                <i class="fas fa-fw fa-child"></i>
                <span>Data Minat dan Bakat</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>sms">
                <i class="fas fa-fw fa-phone"></i>
                <span>SMS Gateway</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>laporan/index">
                <i class="fas fa-fw fa-briefcase"></i>
                <span>Laporan</span></a>
        </li>
    <?php endif ?>
</ul>