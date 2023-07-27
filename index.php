<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <title>Entah Deh</title>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">gabut doang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>                
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">gabut doang</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house"></i> Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="bi bi-pc-display-horizontal"></i> Simulation </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-pc"></i> Computer
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-cpu"></i> CPU </a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gpu-card"></i> GPU </a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-memory"></i> Memory </a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-motherboard"></i> Motherboard</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-device-ssd"></i> SSD</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-device-hdd"></i> HDD</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pc"></i> Case</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-fan"></i> Cooling</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-plug"></i> PSU</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-laptop"></i> Laptop
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#"> Laptop Consumer </a></li>
                                <li><a class="dropdown-item" href="#"> Laptop Gaming </a></li>
                                <li><a class="dropdown-item" href="#"> Laptop Content Creator </a></li>
                                <li><a class="dropdown-item" href="#"> Laptop Business </a></li>
                                <li><a class="dropdown-item" href="#"> Laptop Workstation </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-mouse3"></i> Pheriperal
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-mouse"></i> Mouse </a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-keyboard"></i> Keyboard </a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-controller"></i> Controller </a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-headset"></i> Headset </a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-display"></i> Monitor </a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-router"></i> Router </a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-battery"></i> UPS </a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-sd-card"></i> Memory Card </a></li>
                            </ul>
                        </li>
                        <form class="d-flex mt-3 mb-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success" type="submit">Search</button>
                        </form>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-cart"></i> Cart </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i> Account
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Your Account </a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings </a></li>
                            </ul>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </nav>
  <!--carousel-->
  <div class="banner">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/banner/TLOU AMD Asus.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/banner/Asus TUF 7900.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
  </div>
  <!-- Card Item -->
  <div class="card-category">
    <div class="container-fluid mt-2 mb-2">
        <div class="card text-left">
            <div class="card-header d-flex justify-content-between">
                <h4> Category </h4>
                <a href="#" class="btn btn-outline-light" role="button" data-bs-toggle="button"> More </a>
            </div>
            <div class="card-body text-center">
                <div class="row row-cols-2 row-cols-md-4 g-3">
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/cpu.svg" class="img-card-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">CPU</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/motherboard.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Motherboard</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/gpu-card.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">GPU Card </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/memory.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Memory</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/device-ssd.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">SSD</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/device-hdd.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">HDD</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/fan.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Cooling</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/plug.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title">Power Supply</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/display.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title">Monitor</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/pc.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"> Case </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/headset.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"> Headphone </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/mouse.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"> Mouse </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/keyboard.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"> Keyboard </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/router.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"> Router </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/battery.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"> UPS </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/svg/sd-card.svg" class="img-card-top" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title"> Memory Card </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!--Card Slider CPU -->
  <div class="card-slider-cpu">
    <div class="container-fluid mt-2 mb-2">
        <div class="card text-left">
           <div class="card-header d-flex justify-content-between">
                <h4>CPU</h4>
                <a href="#" class="btn btn-outline-light" role="button" data-bs-toggle="button"> More </a>
           </div> 
           <div id="carouselExample-cpu" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mt-2 mb-2 ms-2  text-center">
                                    <div class="card-body">
                                        <a href="#"><img src="img/computer/cpu/intel/13/13900KS.jpg" class="img-card-top" alt=""></a>
                                        <h5 class="card-title-cpu"><a href="#"> Intel Core i9 13900KS </a></h5>
                                        <p class="card-text">Rp 11.519.000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-2 mb-2 text-center">
                                    <div class="card-body">
                                        <a href="#"><img src="img/computer/cpu/intel/13/13700K.jpg" alt=""></a>
                                        <h5 class="card-title-cpu"><a href="#"> Intel Core i7 13700K </a></h5>
                                        <p class="card-text">Rp 6.579.000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-2 mb-2 me-2 text-center">
                                    <div class="card-body">
                                        <a href="#"><img src="img/computer/cpu/intel/13/13600K.jpg" alt=""></a>
                                        <h5 class="card-title-cpu"><a href="#"> Intel Core i5 13600K </a></h5>
                                        <p class="card-text">Rp 5.119.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mt-2 mb-2 ms-2 text-center">
                                    <div class="card-body">
                                        <a href="#"><img src="img/computer/cpu/amd/7000/7950X.jpg" alt=""></a>
                                        <h5 class="card-title-cpu"><a href="#"> AMD Ryzen 9 7950X </a></h5>
                                        <p class="card-text">Rp 9.769.000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-2 mb-2  text-center">
                                    <div class="card-body">
                                        <a href="#"><img src="img/computer/cpu/amd/7000/7700X.jpg" alt=""></a>
                                        <h5 class="card-title-cpu"><a href="#"> AMD Ryzen 7 7700X </a></h5>
                                        <p class="card-text">Rp 5.189.000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-2 mb-2 me-2 text-center">
                                    <div class="card-body">
                                        <a href="#"><img src="img/computer/cpu/amd/7000/7600X.jpg" alt=""></a>
                                        <h5 class="card-title-cpu"><a href="#"> AMD Ryzen 5 7600X </a></h5>
                                        <p class="card-text">Rp 3.709.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mt-2 mb-2 ms-2 text-center">
                                    <div class="card-body">
                                        <a href="#"><img src="img/computer/cpu/intel/12/12900KS.jpg" alt=""></a>
                                        <h5 class="card-title-cpu"><a href="#"> Intel Core i9 12900KS </a></h5>
                                        <p class="card-text">Rp 7.939.000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-2 mb-2  text-center">
                                    <div class="card-body">
                                        <a href="#"><img src="img/computer/cpu/intel/12/12700K.jpg" alt=""></a>
                                        <h5 class="card-title-cpu"><a href="#"> Intel Core i7 12700K </a></h5>
                                        <p class="card-text">Rp 5.109.000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-2 mb-2 me-2 text-center">
                                    <div class="card-body">
                                        <a href="#"><img src="img/computer/cpu/intel/12/12600K.jpg" alt=""></a>
                                        <h5 class="card-title-cpu"><a href="#"> Intel Core i5 12600K </a></h5>
                                        <p class="card-text">Rp 4.049.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mt-2 mb-2 ms-2 text-center">
                                    <div class="card-body">
                                        <a href="#"><img src="img/computer/cpu/amd/5000/5950X.jpg" alt=""></a>
                                        <h5 class="card-title-cpu"><a href="#"> AMD Ryzen 9 5950X </a></h5>
                                        <p class="card-text">Rp 8.609.000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-2 mb-2  text-center">
                                    <div class="card-body">
                                        <a href="#"><img src="img/computer/cpu/amd/5000/5800X.jpg" alt=""></a>
                                        <h5 class="card-title-cpu"><a href="#"> AMD Ryzen 7 5800X </a></h5>
                                        <p class="card-text">Rp 3.959.000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-2 mb-2 me-2 text-center">
                                    <div class="card-body">
                                        <a href="#"><img src="img/computer/cpu/amd/5000/5600X.jpg" alt=""></a>
                                        <h5 class="card-title-cpu"><a href="#"> AMD Ryzen 5 5600X </a></h5>
                                        <p class="card-text">Rp. 2.749.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample-cpu" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample-cpu" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
           </div>
        </div>
    </div>
  </div>
  <!--card slider gpu-->
</body>
</html>