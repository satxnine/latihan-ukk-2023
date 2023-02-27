<!DOCTYPE html>
<html lang="en">
<?php
// SESSION
session_start();
include('../../config/database.php');
if (empty($_SESSION['username'])) {
    @header('location:../modul-auth/index.php');
}
// CRUD
if (isset($_POST['edit'])) {
    $status = $_POST['status'];
    $nik = $_POST['nik'];
    $q = mysqli_query($con, "UPDATE `masyarakat` SET verifikasi = '$status' WHERE nik = '$nik'");
}

if (isset($_POST['hapus'])) {
    $nik = $_POST['nik'];
    $q = mysqli_query($con, "DELETE FROM `masyarakat` WHERE nik = '$nik'");
}
if (isset($_POST['update'])) {
    $nikLama = $_POST['nikLama'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $telp = $_POST['telp'];
    $password = md5($_POST['password']);
    if ($password == '') {
        $q = mysqli_query($con, "UPDATE `masyarakat` SET nik = '$nik', nama = '$nama', username = '$username', telp = '$telp' WHERE nik = '$nikLama'");
    } else {
        $q = mysqli_query($con, "UPDATE `masyarakat` SET `password` = '$password', nik = '$nik', nama = '$nama', username = '$username', telp = '$telp' WHERE nik = '$nikLama'");
    }
}

?>
<!-- header -->
<?php include('../../assets/header.php') ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include('../../assets/menu.php'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Verifikasi Masyarakat</h3>

                            </div>
                            <div class="card-body">
                                <table id="dataTablesNya" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Telp</th>
                                            <th>Status</th>
                                            <th>Update</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $q = mysqli_query($con, "SELECT * FROM `masyarakat`");
                                        $no = 1;
                                        while ($d = mysqli_fetch_object($q)) { ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $d->nik ?></td>
                                                <td><?= $d->nama ?></td>
                                                <td><?= $d->username ?></td>
                                                <td><?= $d->telp ?></td>
                                                <td><?php if ($d->verifikasi == 0) {
                                                        echo '<form action="" method="post"><input name="nik" type="hidden" value="' . $d->nik . '"><input name="status" type="hidden" value="1"><button name="edit" type="submit" class="btn btn-danger"><i class="fa fa-ban"></i></button></form>';
                                                    } else {
                                                        echo '<form action="" method="post"><input name="nik" type="hidden" value="' . $d->nik . '"><input name="status" type="hidden" value="0"><button name="edit" type="submit" class="btn btn-info"><i class="fa fa-check"></i></button></form>';
                                                    } ?></td>
                                                <td><button data-toggle="modal" data-target="#modal-xl<?= $d->nik ?>" class="btn btn-success"><i class="fa fa-pen"></i></button></td>
                                                <td>
                                                    <form action="" method="post"><input type="hidden" name="nik" value="<?= $d->nik ?>"><button name="hapus" class="btn btn-danger"><i class="fa fa-trash"></i></button></form>
                                                </td>
                                            </tr>

                                            <!-- modal start -->
                                            <div class="modal fade" id="modal-xl<?= $d->nik ?>">
                                                <div class="modal-dialog modal-xl<?= $d->nik ?>">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Data</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="" method="post">
                                                            <input type="hidden" name="nikLama" value="<?= $d->nik ?>">
                                                            <div class="modal-body">
                                                                <div class="form-group"><label for="nik">Nik</label>
                                                                    <input class="form-control" type="text" name="nik" value="<?= $d->nik ?>">
                                                                </div>
                                                                <div class="form-group"><label for="nama">Nama</label>
                                                                    <input class="form-control" type="text" name="nama" value="<?= $d->nama ?>">
                                                                </div>
                                                                <div class="form-group"><label for="username">Username</label>
                                                                    <input class="form-control" type="text" name="username" value="<?= $d->username ?>">
                                                                </div>
                                                                <div class="form-group"><label for="username">New Password</label>
                                                                    <input class="form-control" type="password" name="password" value="">
                                                                </div>
                                                                <div class="form-group"><label for="username">Telepon</label>
                                                                    <input class="form-control" type="number" name="telp" value="<?= $d->nik ?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" name="update" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                    </div>
                                                    </form>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- modal - ends -->

                                        <?php $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include('../../assets/footer.php') ?>

</body>

</html>