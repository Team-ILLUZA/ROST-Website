<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="../css/app.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    </head>
    <body>

        <!-- Home -->
        <section class="home">
            <section class="nav-bar">
                    <!-- navbar -->
               
                <nav class="navbar navbar-expand-lg mx-auto bg-white rounded-5 shadow box-area mt-2">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="../images/Logo-01.png" alt="logo" style="width:100px"></a>
                        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        
                            <li class="nav-item">
                            <a class="nav-link" href="#">HOME</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="#">NEWS</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="#">COMMUNITY</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT US</a>
                            </li>
                        </ul>

                        <form class="d-flex" role="search" id="search">
                            <input class="form-control rounded-4" type="search"  placeholder="Search">
                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        </div>
                    </div>
                </nav>
                
            </section>
            <h1>Home Section</h1>
        </section>

        <hr class="solid">

        <!-- Events -->
        <section class="events">
            <h1>Event Section</h1>
        </section>

        <hr class="solid">

        <!-- News -->
        <section class="news">
            <h1>News Section</h1>
        </section>

        <hr class="solid">

        <!-- Community -->
        <section class="community">
             <!-- first box -->
            <div class="container-fluid">
                <div class="row mt-5 ">
                    <div class="col-md-4 col-sm-12 mb-3 mt-3">
                    <div class="shadow box-area rounded-4 p-5 bg-primary bg-black bg-opacity-50 float-left " id="firstbox">
                        <div class="row" >
                        <h3>ROBOTIC SOCITY OF TECHNOLOGY</h3>
                        <h5>HERE WE ARE</h5>
                        <h5>SINCE 2022</h5>
                        </div>
                        <div class="row mt-3">
                        <div class="qrcode">
                            <img src="../images/QR.png" alt="roboic socity QR code" style="width: 150px; height: 150px;">
                            <p id="p-text"> Join with us..</p>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- second box -->
                
                    <div class="col-md-4 col-sm-12 mb-3 mt-5" >
                    <div class="shadow box-area rounded-4 p-5 bg-primary bg-black bg-opacity-50" id="secondbox">
                        <div class="input-group flex-nowrap mt-5">
                        <input type="text" class="form-control" placeholder="Email address" >
                        </div>
                        <div class="input-group flex-nowrap mt-3">
                        <input type="text" class="form-control" placeholder="Password" >
                        </div>
                        <div class="input-group mt-3">
                        <div class="form-check">
                            <input class="checkbox mt-0"  type="checkbox">
                            <label for="formCheck" class="form-check-label text-secondary">
                            <small id="rem-text">Remember me</small>
                            </label>
                        </div>
                        </div>
                        <div class="input-group mt-3">
                        <button class="btn btn-primary w-100 fs-6" type="button">Login</button>
                        </div>
                        <div class="input-group mt-3">
                        <button class="btn btn-light w-100 fs-6" type="button"><img src="../images/2.png" alt="symbol" style="width: 20px;">
                            <small>Sign in with google</small>
                        </button>
                        </div>
                    </div>
                    </div>
                    
                    <!-- third box -->

                    <div class="col-md-4 col-sm-12 mb-3 mt-3 shadow box-area rounded-4 p-5 
                    bg-primary bg-black bg-opacity-50 float-end" id="lastbox">

                    </div>
                </div>
            </div>

        </section>

        <hr class="solid">
        
        <footer>
            <h1>footer</h1>
        </footer>
    </body>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
