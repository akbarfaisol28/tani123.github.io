<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SawahKita - websitesawahkita</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-start">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                    <h2 class="mb-0">+62 87787408816</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="index.html" class="navbar-brand ms-lg-5">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Rika</span>Tani</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-end">
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Rika</span>Tani</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="<?= base_url('home'); ?>" class="nav-item nav-link active">Beranda</a>
                <a href="<?= base_url('about'); ?>" class="nav-item nav-link">Tentang kami</a>
                <a href="<?= base_url('service'); ?>" class="nav-item nav-link">Servis</a>
                <a href="<?= base_url('product'); ?>" class="nav-item nav-link">Produk</a>
                <a href="<?= base_url('login'); ?>" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h3 class="text-white">Sayuran Organik</h3>
                            <h1 class="display-1 text-white mb-md-4">Bibit Sayuran Organik yang Unggul</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Pencarian</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5">Kontak</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h3 class="text-white">Pupuk Buah</h3>
                            <h1 class="display-1 text-white mb-md-4">Benih Buah Organik yang Unggul</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Pencarian</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5">Kontak</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6">
                    <div class="bg-primary bg-vegetable d-flex flex-column justify-content-center p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Bibit Sayuran</h3>
                        <p class="text-white">Menyediakan Berbagai Bibit dan Pupuk Buah yang Berkualitas untuk tanaman kesayangan Anda</p>
                        <a class="text-white fw-bold" href="">Lainnya<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-secondary bg-fruit d-flex flex-column justify-content-center p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Bibit Buah</h3>
                        <p class="text-white">Menyediakan Berbagai Bibit dan Pupuk Buah yang Berkualitas untuk tanaman kesayangan Anda</p>
                        <a class="text-white fw-bold" href="">Lainnya<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->


    <!-- About Start -->
    <div class="container-fluid about pt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="d-flex h-100 border border-5 border-primary border-bottom-0 pt-4">
                        <img class="img-fluid mt-auto mx-auto" src="img/about.png">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <div class="mb-3 pb-2">
                        <h6 class="text-primary text-uppercase">Tentang Kami</h6>
                        <h1 class="display-5">Produk Bibit kami untuk Keunggulan Tanaman Anda </h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum et tempor sit. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet magna</p>
                    <div class="row gx-5 gy-4">
                        <div class="col-sm-6">
                            <i class="fa fa-seedling display-1 text-secondary"></i>
                            <h4>100% Berkualitas</h4>
                            <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-award display-1 text-secondary"></i>
                            <h4>Award Winning</h4>
                            <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid bg-primary facts py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Our Experience</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Farm Specialist</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Complete Project</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Pembeli Senang</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                        <h6 class="text-primary text-uppercase">Services</h6>
                        <h1 class="display-5">Organic Farm Services</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum et tempor sit. Clita erat ipsum et lorem et sit sed stet labore</p>
                    <a href="" class="btn btn-primary py-md-3 px-md-5">Contact Us</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-carrot display-1 text-primary mb-3"></i>
                        <h4>Bibit Sayuran Bermutu</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-apple-alt display-1 text-primary mb-3"></i>
                        <h4>Bibit Buah Segar</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-dog display-1 text-primary mb-3"></i>
                        <h4>Healty Cattle</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-tractor display-1 text-primary mb-3"></i>
                        <h4>Alat Pertanian</h4>
                        <p class="mb-0">Temukan Berbagai Alat yang ada di butuhkan </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-seedling display-1 text-primary mb-3"></i>
                        <h4>Farming Plans</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-primary feature py-5 pb-lg-0 my-5">
        <div class="container py-5 pb-lg-0">
            <div class="mx-auto text-center mb-3 pb-2" style="max-width: 500px;">
                <h6 class="text-uppercase text-secondary">Features</h6>
                <h1 class="display-5 text-white">Why Choose Us!!!</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="text-white mb-5">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-seedling fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">100% Organik</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita</p>
                    </div>
                    <div class="text-white">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">yuyuyyyyy</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-block bg-white h-100 text-center p-5 pb-lg-0">
                        <p>At et justo elitr amet sea at. Magna et sit vero at ipsum sit et dolores rebum. Magna sea eos sit dolor, ipsum amet no tempor ipsum eirmod lorem eirmod diam tempor dolor eos diam et et diam dolor ea. Clita est rebum amet dolore sit. Dolor stet dolor duo clita, vero dolor ipsum amet dolore magna lorem erat stet sed vero dolor</p>
                        <img class="img-fluid" src="img/feature.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-white mb-5">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-tractor fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">Modern Farming</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita</p>
                    </div>
                    <div class="text-white">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">24/7 Support</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Produk</h6>
                <h1 class="display-5">Murah dan Berkualitas</h1>
            </div>
            <div class="owl-carousel product-carousel px-5">
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/rf.png" alt="">
                        <h6 class="mb-3">Bibit cabe Rawit</h6>
                        <h5 class="text-primary mb-0">Rp.34.000</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/sawi.png" alt="">
                        <h6 class="mb-3">Bibit sawi</h6>
                        <h5 class="text-primary mb-0">Rp.10.000</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/hh.png" alt="">
                        <h6 class="mb-3">bibit kacang panjang</h6>
                        <h5 class="text-primary mb-0">Rp.5.000</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/images.png" alt="">
                        <h6 class="mb-3">bibit Tomat</h6>
                        <h5 class="text-primary mb-0">Rp.29.000</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/tt.png" alt="">
                        <h6 class="mb-3">Bibit terong </h6>
                        <h5 class="text-primary mb-0">Rp.7.000</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5 my-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel p-5">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Client Name</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Client Name</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">The Team</h6>
                <h1 class="display-5">We Are Professional Organic Farmers</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white">Farmer Name</h4>
                                    <span class="text-white">Designation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-twitter text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-facebook-f text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-linkedin-in text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-instagram text-secondary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white">Farmer Name</h4>
                                    <span class="text-white">Designation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-twitter text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-facebook-f text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-linkedin-in text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-instagram text-secondary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white">Farmer Name</h4>
                                    <span class="text-white">Designation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-twitter text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-facebook-f text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-linkedin-in text-secondary"></i></a>
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fab fa-instagram text-secondary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Our Blog</h6>
                <h1 class="display-5">Latest Articles From Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="img/blog-1.jpg" alt="">
                        <a class="blog-overlay" href="">
                            <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                            <span class="text-white fw-bold">Jan 01, 2050</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="img/blog-2.jpg" alt="">
                        <a class="blog-overlay" href="">
                            <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                            <span class="text-white fw-bold">Jan 01, 2050</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="img/blog-3.jpg" alt="">
                        <a class="blog-overlay" href="">
                            <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                            <span class="text-white fw-bold">Jan 01, 2050</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-footer bg-primary text-white mt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-white mb-4">Kontak Kami</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-white me-2"></i>
                                <p class="text-white mb-0">Desa MranggonLawang, Dringu, Probolinggo</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-white me-2"></i>
                                <p class="text-white mb-0">RikaTani@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-white me-2"></i>
                                <p class="text-white mb-0">087787408816</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Our Services</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Meet The Team</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Latest Blog</a>
                                <a class="text-white" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Popular Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Our Services</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Meet The Team</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Latest Blog</a>
                                <a class="text-white" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-secondary p-5">
                        <h4 class="text-white">Newsletter</h4>
                        <h6 class="text-white">Subscribe Our Newsletter</h6>
                        <p>Amet justo diam dolor rebum lorem sit stet sea justo kasd</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-secondary fw-bold" href="#">www websitesawahkita</a>. All Rights Reserved. Designed by <a class="text-secondary fw-bold" href="https://htmlcodex.com">Rika Yatul Nur hafifah</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>