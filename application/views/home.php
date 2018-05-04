<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Publisher</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/favicon.ico'); ?>">

    <style>
        .img-best{
            width: 210px;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.6);
        }
        .detail-img{
            width: 100%;
        }
        .fade-scale{
            opacity: 0;
            transition: all .3s ease;
            display: block !important;
            z-index: -1;
            transform: translateZ(0) scale(0.8,0.8);
            -webkit-backface-visibility: hidden;
        }
        .fade-scale.show{
            opacity: 1;
            z-index: 99999;
            transform: translateZ(0) scale(1.0,1.0);
            -webkit-transform: translateZ(0) scale(1.0,1.0);
        }
    </style>

</head>
<body>

    <!-- main navigation -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-md py-3 justify-content-sm-start justify-content-center"">
        <a href="" class="navbar-brand mr-4">
            <img src="<?php echo base_url('assets/images/book.png'); ?>" alt="book" width="30">
            Book Publisher
        </a>
        <form action="" class="form-inline" style="width: 300px;">
            <input type="search" name="search" id="search" class="form-control w-100" placeholder="search here . . .">
        </form>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-md-auto ml-0">
                <li class="nav-item">
                    <a href="" class="nav-link">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a href="#" role="button" class="nav-link" data-toggle="modal" data-target="#login">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- first navigation -->
    <ul class="nav bg-dark px-4 justify-content-sm-start justify-content-center">
        <li class="nav-item">
            <a href="" class="nav-link text-light">Category</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link text-light">Promo</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link text-light">Featured</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link text-light">Pricing</a>
        </li>
    </ul>

    <!-- header -->
    <div class="jumbotron jumbotron-fluid px-5">
        <div class="row">
            <div class="col-lg-9 text-lg-left text-center order-lg-1 order-2">
                <h1 class="display-4 mb-5  mt-lg-0 mt-5">Promo Sale</h1>
                <p class="lead pt-5">Many item are in promo, buy now!</p>
                <p>We provide various types of books written by the best authors with high quality writing.</p>
                <p class="lead">
                    <a class="btn btn-info btn-lg " href="#" role="button">
                        <i class="fas fa-shopping-cart mr-3"></i>Buy Now
                    </a>
                </p>
            </div>
            <div class="col-lg-3 text-center order-lg-2 order-1">
                <img src="<?php echo base_url('assets/images/book.jpeg'); ?>" alt="the night gardener" class="img-best">
            </div>
        </div>
    </div>

    <!-- book menu -->
    <div class="container">

        <div class="row justify-content-center">

            <?php for($i=0; $i<6; $i++){ ?>

            <div class="card mb-4 mx-2" style="width: 10rem;">
                <img class="card-img-top" src="<?php echo base_url('assets/images/book1.jpg'); ?>" alt="">
                <div class="card-body text-center">
                    <button class="btn btn-sm btn-info px-3" data-toggle="modal" data-target="#details">Details</button>
                </div>
            </div>

            <?php } ?>

        </div>

    </div>

    <!-- book category -->
    <div class="container-fluid bg-light p-4">
    
        <h2 class="text-center my-4">Category</h2>

        <div class="row justify-content-center">

            <?php for($i=0; $i<6; $i++){ ?>
            
            <a href="" class="nav-link text-dark col-5 card p-5 mb-4 <?php if ($i % 2 == 0) { echo 'mr-4'; } ?>">

                <div class="row">
                    <div class="col-md-4 col-12 text-center">
                        <i class="fas fa-desktop fa-5x text-primary"></i>
                    </div>
                    <div class="col-md-8 col-12 align-items-center d-flex justify-content-md-start justify-content-center">
                        <p class="lead mt-md-0 mt-3 mb-0">Technology</p>
                    </div>
                </div>
                
            </a>

            <?php } ?>

        </div>
    </div>

    <!-- footer -->
    <div class="container-fluid p-5 bg-dark text-white">
        <div class="row">
            <div class="col-lg-4 col">
                <h5>Contact Us</h5>
                <p class="m-0 text-secondary">Customare Care</p>
                <p class="m-0 text-secondary">(+62) 21 4682 1089</p>
                <p class="m-0 text-secondary">Monday - Saturday (08:00 - 17.00)</p>
            </div>
            <div class="col-lg-2 col-md-4 col-5 ml-auto text-right">
                <h5>Follow Us</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="" class="nav-link p-0 text-secondary d-inline-block">Facebook <i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link p-0 text-secondary d-inline-block">Twitter <i class="fab fa-twitter-square"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link p-0 text-secondary d-inline-block">Instagram <i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-secondary px-4 py-2 text-light">
        <p class="m-0"><small>2018 &copy; PT. Penerbit Buku<small></p>
    </div>

    <!-- modal detail buku -->
    <div class="modal fade-scale" id="details" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content p-5">
                
                <div class="row">
                    <div class="col-5">
                        <img class="detail-img" src="<?php echo base_url('assets/images/book1.jpg'); ?>" alt="">
                        <button class="btn btn-primary w-100 mt-3">Buy now</button>
                    </div>
                    <div class="col-7">
                        <h3>The Martian</h3>
                        <p>Penulis : Gading Martusion</p>
                        <p>Tanggal Terbit : 20 Agustus 2017</p>
                    </div>
                </div>
            
            </div>
        </div>
    </div>

    <!-- modal login -->
    <div class="modal fade-scale" id="login" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-5">
                <h2 class="text-center mb-5">Sign In</h2>
                <form class="form mb-5" action="">
                    <input type="text" name="username" id="uname" class="form-control mb-3" placeholder="username">
                    <input type="password" name="password" id="pwd" class="form-control mb-4" placeholder="password">
                    <div class="row mb-4">
                        <div class="col">
                            <div class="custom-control custom-checkbox text-left align-items-center d-flex">
                                <input type="checkbox" class="form-control custom-control-input" name="remember" id="remember">
                                <label class="custom-control-label text-secondary" for="remember">Remember me</label>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="penerbit" class="nav-link p-0 m-0">forgot password?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info w-100">Sign In</button>
                </form>
                <button class="btn btn-outline-danger btn-sm mb-2 w-50 text-left"><i class="fab fa-google ml-2 mr-3"></i> Sign In with Goggle</button>
                <button class="btn btn-outline-primary btn-sm w-50 text-left"><i class="fab fa-facebook-f ml-2 mr-3"></i> Sign In with Facebook</button>
            </div>
        </div>
    </div>

    <!-- load JS-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <script>

        //animation after modal
        function afterModal(e){
            e.setAttribute("style", "display: none !important");
        }

        $('#details').on('hide.bs.modal', function(e){
            setTimeout(() => {
                afterModal(this)
            }, 3000);
        })

    </script>

</body>
</html>