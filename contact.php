<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNook</title>

    <link rel="stylesheet" type="text/css" href="assest/css/style.css">
    <link rel="stylesheet" type="text/css" href="assest/css/responsive.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <div class="overflow-hidden">
        <div class="header-top">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="assest/images/logo.svg" alt="" class="img-fluid logo1">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-lg-auto">
                            <div class="d-block d-lg-none mb-5 text-center">
                                <button class="navbar-toggler fa-2x" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                                    <span>×</span>
                                </button>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="works.php">Works</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="contact.php">Contact</a>
                            </li>

                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">App development</a></li>
                                    <li><a class="dropdown-item" href="#">web development</a></li>
                                    <li><a class="dropdown-item" href="#">UX & UI design</a></li>
                                    <li><a class="dropdown-item" href="#">Digital business development</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="banner-section position-relative overflow-hidden contact" style="background-image: url('assest/images/modern-living-room-light-stylish.jpg');">
            <div class="overlay d-flex flex-column justify-content-center padding">
                <div class="container">
                    <div class="row">
                        <div class="space-top"></div>
                        <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                            <h2 class="display-6 mb-4 pb-2" data-aos="fade-up" data-aos-delay="100">Get in Touch with Us</h2>
                            <div data-aos="fade-up" data-aos-delay="200">
                                <p class="mb-5">We are excited to embark on this journey with you to create your dream study room. Whether you have specific design ideas in mind or need guidance to bring your vision to life, our dedicated team is here to assist you. Contact us today to schedule a consultation and start designing the study room you've always wanted. Let BookNook be your partner in crafting the perfect study environment that nurtures learning and productivity.</p>
                            </div>
                            <h4 class="font-MagnatHead_Regular mb-4" data-aos="fade-up" data-aos-delay="250"><a href="tel:8454704090"><i class="fa-solid fa-phone me-3 text-main"></i> 845.470.4090</a></h4>
                            <h4 class="font-MagnatHead_Regular mb-4" data-aos="fade-up" data-aos-delay="300"><a href="mailTo:Office@booknookdesign.com"><i class="fa-regular fa-envelope me-3 text-main"></i> Office@booknookdesign.com</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer-section">
            <div class="container">
                <hr class="border-white mb-5 opacity-100">
                <div class="row mb-5 pb-md-3">
                    <div class="col-md-4 col-sm-9 col-8">
                        <a href="index.php">
                            <img src="assest/images/logo.svg" alt="" class="img-fluid logo-ftr">
                        </a>
                    </div>
                    <div class="col-md-8 col-sm-3 col-4">
                        <nav class="nav nav1 justify-content-lg-end">
                            <a class="nav-link active" href="index.php">Home</a>
                            <a class="nav-link" href="about.php">About</a>
                            <a class="nav-link" href="works.php">Works</a>
                            <a class="nav-link" href="contact.php">Contact</a>
                        </nav>
                    </div>
                </div>
                <p class="fs-14 text-white-60 mb-0">© 2023 BookNook Design. All rights reserved  |  Designed by Avrumy</p>
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="assest/js/SmoothScroll.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="assest/js/script.js"></script>
</body>
</html>