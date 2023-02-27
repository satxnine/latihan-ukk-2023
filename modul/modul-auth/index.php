<?php
include('../../config/database.php');
if (isset($_POST['cek'])) {
    $pilihan = $_POST['pilihan']; //masyarakat atau petugas
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    if ($pilihan == 'masyarakat') {
        $q = mysqli_query($con, "SELECT * FROM `masyarakat` WHERE username = '$username' AND password = '$password' AND verifikasi = 1");
        $r = mysqli_num_rows($q);
        if ($r == 1) {
            $d = mysqli_fetch_object($q);
            @session_start();
            $_SESSION['nik'] = $d->nik;
            $_SESSION['username'] = $d->username;
            $_SESSION['nama'] = $d->nama;
            $_SESSION['telp'] = $d->telp;
            $_SESSION['level'] = 'masyarakat';
            @header('location:../../modul/modul-profile/');
        } else {
            echo '<div class="alert alert-danger alert-dismissable"><a href="" class="close" data-dismiss="alert">x</a> <strong class="text-white">Data salah atau belum di verifikasi</strong></div>';
        }
    } else if ($pilihan == 'petugas') {
        $q = mysqli_query($con, "SELECT * FROM `petugas` WHERE username = '$username' AND password = '$password'");
        $r = mysqli_num_rows($q);
        if ($r == 1) {
            $d = mysqli_fetch_object($q);
            @session_start();
            $_SESSION['username'] = $d->username;
            $_SESSION['level'] = $d->level;
            $_SESSION['id_petugas'] = $d->id_petugas;
            @header('location:../../modul/modul-petugas/');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- header -->
<?php include('../../assets/header.php') ?>

<body">
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <!-- Main content -->
        <section class="content ">
            <div class="container-fluid">
                <div class="row justify-content-md-center">
                    <div class="col-md-3" style="margin-top:5%">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa fa-users">&nbsp;</i>Login <small>SISPENMAS</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Masukan Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Masukan Password">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="pilihan">
                                            <option value="masyarakat">masyarakat</option>
                                            <option value="petugas">Petugas</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-0">
                                        <span class="text text-success">Belum terverifikasi?</span>Coba daftar <a href="registrasi.php">disini</a>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="form-group">
                                        <button name="cek" type="submit" class="form-control btn btn-primary">Masuk</button>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.container-fluid -->
        <!-- /.content -->
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
    <?php include('../../assets/footer.php') ?>

    </body>

</html>