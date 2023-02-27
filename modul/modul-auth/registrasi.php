<?php
include('../../config/database.php');
if (isset($_POST['simpan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];
    $q = mysqli_query($con, "INSERT INTO `masyarakat` (nik, nama, username, password, telp, verifikasi) VALUES ('$nik', '$nama', '$username', '$password', $telp, 0)");
    if ($q) {
        echo  '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                Registrasi Berhasil Tunggu verifikasi oleh admin
                </div>';
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
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa fa-users">&nbsp;</i>Registrasi Masyarakat <small>SISPENMAS</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nik</label>
                                        <input type="text" name="nik" class="form-control" placeholder="Masukan NIK anda">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap Sesuai KTP</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Masukan Username">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Masukan Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Telp</label>
                                        <input type="number" name="telp" class="form-control" placeholder="Masukan Nomor telepon">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="form-group">
                                        <button name="simpan" type="submit" class="form-control btn btn-success">Daftar</button>
                                    </div>
                                    <div class="form-group mb-0">
                                        <span class="text text-success">Sudah Verifikasi?</span>Silahkan Masuk <a href="index.php">disini</a>
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