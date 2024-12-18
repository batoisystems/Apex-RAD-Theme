<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $sPageTitle;?></title>

    <!-- Font -->
    <link rel="stylesheet" href="https://use.typekit.net/vhf0oxf.css">          

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../../cloudspace/pub/css/app.css">

    <!-- Animate -->
    <link rel="stylesheet" href="https://www.batoi.com/pub/css/animate.min.css">
    <link rel="stylesheet" href="https://www.ashwinirath.com/pub/css/animate.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    
    <style>
        .apex-heading{
            letter-spacing: 0.15rem;
            font-size: 1.1rem;
            line-height: 1.7rem;
            font-weight: 600;
            text-transform: uppercase;
        }  

        /* Home Banner Img */
        .home-banner{
            padding-left: 100px;
        }

        .home-banner-bg{
            background-color: var(--bs-secondary);
            width: 300px;
            height: 300px;
            border-radius: 20px;
            transform: rotate(315deg);
        }

        .home-banner-img{
            width:85%;
            margin-top:-10rem;
            margin-right:6rem;
            margin-left:-2.7rem;
            border-radius:20px;
            transform: rotate(45deg);
            clip-path: polygon(0 0, 100% 0, 100% 100%, 90% 100%, 0 46.5%);
        }

        @media (min-width: 700px) {
            .home-banner{
                padding-left: 150px;
            }
        }

        @media (min-width: 1200px) {
            .home-banner{
                padding-left: 450px;
            }

            .home-banner-img{
                margin-top:-14rem;
                margin-right:10rem;
                margin-left:-3.9rem;
                border-radius:20px;
            } 

            .home-banner-bg{
                width: 420px;
                height: 420px;
            }
        }

        /* About bg */
        .about-bg{
            background-color: var(--bs-secondary);
            padding: 0 0 0 1.5rem;
            width: 200px;
            height: 200px;
            border-radius: 20px;
            transform: rotate(45deg);
        }

        .about-img{
            width:200px;
            height:200px; 
            margin-top:-1.5rem;
            border-radius:20px;
            /* transform: rotate(45deg); */
        }
        @media (min-width: 769px) {
            .about-img{
                width:320px;
                height:320px; 
            } 

            .about-bg{
                width: 320px;
                height: 320px;
            }
        }

        /* Figure */
        .fill-mode {
            fill: var(--bs-primary) !important;
        }

        .opacity-09 {
            opacity: 0.09 !important;
        }

        .apex-figure{
            right: 35%;
            top:5%;
        }

        .apex-icon{
            border:0.125rem solid var(--bs-secondary);
            color: var(--bs-secondary);
            padding: .25rem .45rem .2rem;
            border-radius: 50%;
            font-size:0.875rem;
            margin-right:0.75rem;
        }   

        .team-social-icon{
            box-shadow: 0 .063rem .063rem 0 rgb(0 0 0 / 20%);
            padding: 0.1rem .5rem 0;
            border-radius: 50%;
        }

        .team-social-icon:hover{
            background-color:var(--bs-primary) !important;
            color:var(--bs-white) !important;
        }
    </style>
</head>
<body>
<div class="px-0" id="apex-header-top">
    <div class="bg-success mb-0 py-2 px-3" role="alert">
        <a class="text-white small">Batoi Partners with C V Raman Global University
            <i class="bi bi-x text-white float-end h5 mb-0 mt-1" type="button" id="remove"></i>
        </a>
    </div>
</div>
<!-- Header START -->
<header class="header-absolute sticky-top" id="apex-newClass">
    <nav class="navbar navbar-light navbar-expand py-2 px-0 border-0 bg-light">
        <div class="container d-block">
            <div class="d-flex align-items-center">
                <!-- Logo -->
                <a class="navbar-brand ps-0 my-4" href="home">
                    <img class="align-top web-logo" src="../../cloudspace/pub/image/batoi-logo.png" alt="logo">
                </a>
                <!-- <div class="logo-bar me-3"></div>
                <div class="text-secondary fs-6">ApexTemplate</div> -->

                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto d-lg-flex d-none align-items-center text-nowrap">
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($sSlug) && ($sSlug == 'home')){ print 'active'; } ?>" href="home">Home</a>
                        </li>
                        <li class="nav-item dropdown position-relative">
                            <a class="nav-link <?php if(isset($sSlug) && ($sSlug == 'about')){ print 'active'; } ?>" href="about">About Us</a>
                        </li>
                        <li class="nav-item dropdown position-relative">
                            <a class="nav-link <?php if(isset($sSlug) && ($sSlug == 'services' || $sSlug == 'individual-service')){ print 'active'; } ?>" href="services">Services</a>
                        </li>
                        <li class="nav-item dropdown position-relative">
                            <a class="nav-link <?php if(isset($sSlug) && ($sSlug == 'team')){ print 'active'; } ?>" href="team">Team</a>
                        </li>
                        <li class="nav-item dropdown position-relative">
                            <a class="nav-link <?php if(isset($sSlug) && ($sSlug == 'blog' || $sSlug == 'individual-blog')){ print 'active'; } ?>" href="blog">Blog</a>
                        </li>
                    </ul>
                
                    <ul class="navbar-nav d-flex align-items-center ms-auto ms-lg-0 text-nowrap">
                        <li class="nav-item ms-4">
                            <a href="contact" class="btn btn-outline-primary py-2 px-3 d-none d-lg-block">
                                <small>Contact Us</small> <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </li>
                        <li class="nav-item ms-auto d-lg-none d-block">
                            <!-- Offcanvas toggle button for mobile device -->
                            <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <i class="bi bi-list"></i>
                            </button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link open-search-bar-btn" onclick="openSearch()">
                                <i class="bi bi-search" aria-hidden="true"></i> 
                            </a>
                            <a class="nav-link close-search-bar-btn d-none" onclick="closeSearch()">
                                <i class="bi bi-x-lg" aria-hidden="true"></i> 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Search Box -->
            <div class="search-box col-lg-6 col-12 border-0 mx-auto px-0 pt-4 pb-2 d-none">
                <form action="" method="get">
                    <div class="input-group">
                        <input type="text" name="" class="form-control search-bar px-4" placeholder="Type search text..." value="" required="">
                        <button type="submit" class="btn btn-primary m-0">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <!-- Website Mobile Menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header px-4">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <a class="navbar-brand px-0 pt-0 position-relative me-auto pb-0 fs-inherit" href="home.html">
                    <img class="align-top navbar-logo" alt="Logo" src="../../cloudspace/pub/image/batoi-logo.png">
                </a>
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-0">
            <div class="border-0 text-start">
                <div class="border-bottom py-2 px-4">
                    <h6 class="border-0 pt-2">
                        <a class="px-0 text-decoration-none text-dark text-uppercase" href="home">
                            Home
                        </a>
                    </h6>
                </div>
                <div class="border-bottom py-2 px-4">
                    <h6 class="border-0 pt-2">
                        <a class="px-0 text-decoration-none text-dark text-uppercase" href="about">
                            About Us
                        </a>
                    </h6>
                </div>
                <div class="border-bottom py-2 px-4">
                    <h6 class="border-0 pt-2">
                        <a class="px-0 text-decoration-none text-dark text-uppercase" href="services">
                            Services
                        </a>
                    </h6>
                </div>
                <div class="border-bottom py-2 px-4">
                    <h6 class="border-0 pt-2">
                        <a class="px-0 text-decoration-none text-dark text-uppercase" href="team">
                            Team
                        </a>
                    </h6>
                </div>
                <div class="border-bottom py-2 px-4">
                    <h6 class="border-0 pt-2">
                        <a class="px-0 text-decoration-none text-dark text-uppercase" href="blog">
                            Blog
                        </a>
                    </h6>
                </div>
                <div class="border-bottom py-2 px-4">
                    <h6 class="border-0 pt-2">
                        <a class="px-0 text-decoration-none text-dark text-uppercase" href="contact">
                            Contact Us
                        </a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header END -->
<main class="mx-0">