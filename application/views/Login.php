<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <title>LOGIN - Aplikasi E-Library</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js'; ?>"></script>
</head>

<body>
    <div class="col-md-4 col-md-offset-4" style="margin-top:50px ">
        <center>
            <h2>PERPUSTAKAAN UNIVERSITAS BINA SARANA INFORMATIKA</h2>
            <h3>LOGIN</h3>
        </center>
        <br>
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert alert-danger alert-danger";
                echo $this->session->flashdata('alaert');
                echo "</div>";
            } else if ($_GET['pesan'] == 'logout') {
                if ($this->session->flashdata()) {
                    echo "<div class='alert alert-danger alert-success'>";
                    echo $this->sessien->flashdata('Anda telah logout');
                    echo "</div>";
                }
            } else if ($_GET['pesan'] == 'Belom Login') {
                if ($this->sessien->flashdata()) {
                    echo "<div class='alert alert-danger alert-primary'>";
                    echo $this->sessien->flashdata('alert');
                    echo "</div>";
                }
            } else {
                echo "<div class='alert alert-danger alert-message'>";
                echo $this->sessien->flashdata('alert');
                echo "</div>";
            }
        }
        ?>
        <br>
        <div class="panel panel-default">
            <div class="panel-body">
                <br><br>
                <form action="<?php echo base_url() . 'welcome/admin' ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="admin_username" placeholder="username" class="form-control" id="username">
                        <?php echo form_error('username'); ?>

                    </div>
                    <div class="form-group">
                        <input type="password" name="admin_password" placeholder="password" class="form-control" id="password">
                        <?php echo form_error('password'); ?>

                   
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-primary">

                    </div>
                 </div>
                 
                </form>
                <div class="tex-center">
                    <a class="small" href="<?= base_url('welcome/registrasi')?>">registrasi</a>

                </div>
                <br><br>
                
            </div>


        </div>

    </div>
    <script type="text/javascript">
        $('.alert-message').alert().delay(3000).slideUp('slow');
    </script>


</body>

</html>