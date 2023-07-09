<?php require_once('config.php'); ?>

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

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
                                <a class="nav-link active" href="works.php">Works</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
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

        <div class="section-works position-relative overflow-hidden">
            <img src="assest/images/booknook-pattern.png" alt="" class="img-fluid w-100 booknook-pattern">
            <div class="padding">
                <div class="container">
                    <div class="space-top"></div>
                    <div class="row g-3 position-relative">
                        <div class="col-lg-4 col-6">
                            <div class="box1 bg-white d-flex flex-column justify-content-center">
                                <div class="">
                                    <h2 class="display-6 mb-0 text-1c">Transforming Study <br> Spaces: <span class="text-main">Our Success</span></h2>
                                </div>
                            </div>
                        </div>
                        <?php
                        $qry = $conn->query("SELECT * FROM `images` order by `position`");
                        while($row= $qry->fetch_assoc()):
                            ?>
                            <div class="col-lg-4 col-6">
                                <a data-fancybox="gallery" data-src="admin/uploads/<?php echo $row['img']; ?>">
                                    <img src="admin/uploads/<?php echo $row['img']; ?>" alt="Image" class="img-fluid w-100 img-work">
                                </a>
                            </div>

                         <?php endwhile; ?>
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
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script type="text/javascript" src="assest/js/script.js"></script>
</body>
</html>