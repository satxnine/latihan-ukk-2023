<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SISPEMAS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $_SESSION['username'] ?></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php if ($_SESSION['level'] == 'masyarakat') { ?>

                    <li class="nav-item">
                        <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/latihan-ukk-2023/modul/modul-profile/" class="nav-link">
                            <i class="nav-icon fas fa-user-circle"></i>
                            <p>
                                Profil
                            </p>
                        </a>
                    </li>

                <?php } ?>
                <li class="nav-item">
                    <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/latihan-ukk-2023/modul/modul-pengaduan" class="nav-link">
                        <i class="nav-icon fas fa-exclamation-circle"></i>
                        <p>
                            Pengaduan
                        </p>
                    </a>
                </li>
                <?php if ($_SESSION['level'] == 'admin') { ?>
                    <li class="nav-item">
                        <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/latihan-ukk-2023/modul/modul-masyarakat" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Masyarakat
                            </p>
                        </a>
                    </li>

                <?php } ?>
                <li class="nav-item">
                    <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/latihan-ukk-2023/modul/modul-tanggapan" class="nav-link">
                        <i class="nav-icon fas fa-reply"></i>
                        <p>
                            Tanggapan
                        </p>
                    </a>
                </li>
                <?php if ($_SESSION['level'] == 'admin') { ?>
                    <li class="nav-item">
                        <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/latihan-ukk-2023/modul/modul-petugas" class="nav-link">
                            <i class="nav-icon fas fa-life-ring"></i>
                            <p>
                                Petugas
                            </p>
                        </a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/latihan-ukk-2023/modul/modul-auth/logout.php" class="nav-link">
                        <i class="nav-icon fas fa-lock"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>