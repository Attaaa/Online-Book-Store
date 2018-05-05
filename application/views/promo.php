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
        .card-img-top{
            height: 250px;
            object-fit: cover;
            filter: grayscale(50%);
        }
        .icon-search{
            position: absolute;
            right: 2%;
            top: 30%;
            color: gray;
        }
    </style>

</head>

<body>

    <!-- main navigation -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-md py-3 justify-content-sm-start justify-content-center">
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

    <!-- promo list -->
    <div class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-6 position-relative p-0">
                <input type="search" name="search_promo" class="form-control" placeholder="Search Promo . . .">
                <i class="fas fa-search icon-search"></i>
            </div>
        </div>

        <div class="row py-5">

            <?php for ($i=0; $i<6; $i++) { ?>

            <div class="col-6 mb-3 px-2">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url('assets/images/promo.jpeg'); ?>" alt="Promo">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Buy 500 Book Get Discount Up To 50%</h4>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <p class="mb-0">Valid Period</p>
                                <p class="mb-0"><small>16 Feb 18 - 06 Mei 18</small></p>
                            </div>
                            <div class="col text-right align-items-center d-flex">
                                <a href="" class="btn btn-info ml-auto">See Promo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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

    <!-- load JS-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>

</html>