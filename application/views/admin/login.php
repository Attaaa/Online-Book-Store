<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/favicon.ico'); ?>">

</head>
<body>
    
    <!-- container back -->
    <div class="container-fluid p-2 bg-light">
        <a href="#" class="btn btn-sm btn-outline-info py-2 px-3"> <i class="fas fa-arrow-left"></i>  HOME</a>
    </div>

    <!-- login form -->
    <div class="container mt-5 pt-5 position-relative">

        <h1 class="text-center mb-5">Admin Login</h1>

        <div class="row justify-content-center">
            <div class="col-5">
                <form class="text-center" action="">
                    <input type="text" name="username" class="form-control mb-4 py-2" placeholder="username">
                    <input type="password" name="password" class="form-control mb-3 py-2" placeholder="password">
                    <div class="row mb-4">
                        <div class="col">
                            <div class="custom-control custom-checkbox text-left">
                                <input type="checkbox" class="form-control custom-control-input" name="remember" id="remember">
                                <label class="custom-control-label text-secondary" for="remember"><small>Remember me</small></label>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="penerbit" class="nav-link p-0 m-0"><small>forgot password?</small></a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info p-2 w-100">Login</button>
                </form>
            </div>
        </div>

    </div>


    <!-- load JS-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>
</html>