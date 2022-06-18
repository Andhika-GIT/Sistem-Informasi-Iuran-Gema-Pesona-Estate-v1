<?php 
session_start();	
if(isset($_SESSION['login']))
{
    header('location:datapenduduk.php');
}


?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Iuran</title>
  <link rel ="shortcut icon" type="image/png" href="asset/logo/logo.png">
  

  <!-- Include Style -->
  <?php include 'src/style.php'?>
  <!-- End Include Style -->
  <style>
    .pesan {
        background: #F2DEDE;
        color: #A94442;
        padding: 10px;
        width: 95%;
        border-radius: 5px;
        margin: 20px auto;
}
  </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
         
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <h3 class="text-center text-bold mb-4">LOGIN</h3>
                <?php if (isset($_GET['pesan'])) { ?>
                    <p class="pesan"><?php echo $_GET['pesan']; ?></p>
                <?php } ?>

                <form action="fungsiLogin.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username" autofocus="">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa fa-lock"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
    </div>


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
