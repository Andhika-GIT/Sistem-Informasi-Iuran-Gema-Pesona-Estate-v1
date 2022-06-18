

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">    
    
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <!-- <div class="container_fluid"> -->

        <div class="jumbotron jumbotron-fluid text-center bg-primary">
          <h1>My PHP Project With Bootstrap 4</h1>
          <p>Resize this responsive page to see the effect!</p> 
          <form action="" class="form-inline justify-content-center">
                <div class="input-group ">
                    <input type="email" class="form-control" size="50" placeholder="Email Address" required>
                    <div class="input-group-btn">
                        <button class="btn btn-warning">Subscribe</button>
                    </div>
                </div>
            </form>
        </div>


        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
            <div class="container">
              <a class="navbar-brand" href="#">LOGO</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#portofolio">Siswa</a>
                  </li>    
                   
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>    
                </ul>
                
              </div>  
          </div>
        </nav>


       
        <!-- PORTOFOLIO -->
    <div id="portofolio" class="container-fluid text-center bg-light">
        <div class="container section">
            <h2 class="">OUR STUDENTS</h2>
            <!-- <h4 class="">What we have create</h4> -->
            <div class="row" style="margin-top: 5%">
                
                <div class="col-md-4 text-left" style="margin-bottom: 5%">
                    <div class="img-thumbnail">
                        <img style="width: 200px; height: 200px" class="img-fluid mx-auto d-block"
                            src="" alt="ini foto siswa">
                        <p style="margin-top: 20px; margin-left: 10px"></p>
                        <p style="margin-left: 10px"></p>
                        <p style="margin-left: 10px"></p>
                        <p style="margin-left: 10px"></p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- kontak -->
        <div id="contact" class="container-fluid text-warning bg-primary">
            <div class="container section"> 
                <h2 class="text-center">Contact</h2>
                <div class="row">
                    <div class="col-md-5">
                        <p>Contact Us and we will get back to you </p>
                        <p><span class="fa fa-map-marker"></span> &nbsp;Kyoto, Japan</p>
                        <p><span class="fa fa-phone"></span>&nbsp; <a href="https://wa.me/082132972137" target="_blank"> 0811111111</a></p>
                        <p><span class="fa fa-envelope"></span> &nbsp;<a href="mailto:email@website.com">Email@website.com</a></p>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Nama">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" placeholder="email">
                            </div>
                        </div>
                        <textarea name="coment" class="form-control" rows="4" placeholder="your comment here..."></textarea>
                    </div>
                    <br><br>
                </div>
                <hr>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.043716520707!2d106.82352901431194!3d-6.3883604642619805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6e06f8179b%3A0xc393f79d8debe4df!2sRumah%20Coding!5e0!3m2!1sen!2sid!4v1584599878789!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>

        <!-- footer -->
        <footer class="container-fluid text-center bg-dark text-white">
            <div class="container section">
                <a href="#myPage">
                    <span class="fa fa-chevron-up"></span>
                </a>
                <p>&copy;2020 PT. BERSAMA KITA BERSINERGI</p>
            </div>
        </footer>
</body>

</html>