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

    <!-- Bootstrap Table -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/jquery-resizable-columns@0.2.3/dist/jquery.resizableColumns.css" rel="stylesheet">
    <link href="https://unpkg.com/bootstrap-table@1.20.2/dist/bootstrap-table.min.css" rel="stylesheet">

    <!-- Animate -->
    <link rel="stylesheet" href="https://www.batoi.com/pub/css/animate.min.css">
    <link rel="stylesheet" href="https://www.ashwinirath.com/pub/css/animate.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    
    <style>
        #apex-banner {
            padding-bottom: 4rem;
            padding-top: 4rem;
            height: 750px;
            position: relative;
			width: 100%;
			overflow: hidden;
            color: #ffffff;
        }
        #apex-banner::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-size: cover;
			background-position: center center;
			transition: opacity 1s ease-in-out; /* Transition for smooth crossfade */
			animation: changeBackground 40s ease-in-out infinite;
		}
        #apex-banner:nth-child(1) {
			animation-delay: 0s;
		}

		#apex-banner:nth-child(2) {
			animation-delay: 20s; /* Adjust delay as needed */
		}

		#apex-banner:nth-child(3) {
			animation-delay: 40s; /* Adjust delay as needed */
		}

		@keyframes changeBackground {
			0%, 100% {
				background-image: url('https://matrix.radhostbox.com/assets/img/home-banner-bg-01.jpg');
				transform: scale(1); /* Initial scale */
			}
			17% {
				opacity: 1;
				transform: scale(1.2); /* Initial scale */
			}
			33% {
				background-image: url('https://matrix.radhostbox.com/assets/img/home-banner-bg-03.jpg');
				opacity: 1; /* Start fading out */
				transform: scale(1); /* Initial scale */
			}
			50% {
				opacity: 1;
                transform: scale(1.2);
			}
			66% {
				background-image: url('https://matrix.radhostbox.com/assets/img/home-banner-bg-02.jpg');
				opacity: 1; /* Start fading in */
				transform: scale(1); /* Initial scale */
			}
            83% {
				opacity: 1;
                transform: scale(1.2);
			}
		}
        .banner-search-box{
            margin-top: -70px;
            position: relative;
            background: #00B696;
            border: 0.125rem solid #ffffff;
            border-radius: 0.313rem;
        }

        .blog-featured-img {
            height: 220px;
            background-size: cover;
            background-position: center;
        }
        #apex-banner-3{
            padding-bottom: 7rem;
            padding-top: 7rem;
            background-position: center;
            background-size: contain;
            background-attachment: fixed;
            background-image: linear-gradient(to bottom, #00B696 0%, rgba(14, 104, 176, 0.5) 100%), url(https://matrix.radhostbox.com/assets/img/bg-pattern-01.jpg);
            color: #ffffff;
        }

        .business-logo-directory-image {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
            margin-top: -3rem;
            border: 1px solid #fff;
            margin-left: -.50rem;
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .085) !important;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--bs-secondary);
            color: #ffffff;
            font-size: 1.2rem;
        }
        @media screen and (max-width: 1200px) {
            .about-img{
                width: 80%;
            }
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
<header class="header-absolute sticky-top bg-white" id="apex-newClass">
    <nav class="navbar navbar-light navbar-expand py-2 px-0 border-0">
        <div class="container d-block">
            <div class="d-flex align-items-center">
                <!-- Logo -->
                <a class="navbar-brand ps-0 my-2" href="home">
                    <img class="align-top web-logo" src="../../cloudspace/pub/image/batoi-logo.png" alt="logo">
                </a>

                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto d-lg-flex d-none align-items-center text-nowrap">
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($sSlug) && ($sSlug == 'home')){ print 'active'; } ?>" href="home">Home</a>
                        </li>
                        <li class="nav-item dropdown position-relative">
                            <a class="nav-link <?php if(isset($sSlug) && ($sSlug == 'about')){ print 'active'; } ?>" href="about">About</a>
                        </li>
                        <li class="nav-item dropdown position-relative">
                            <a class="nav-link <?php if(isset($sSlug) && ($sSlug == 'jobs' || $sSlug == 'job-position' || $sSlug == 'individual-job' || $sSlug == 'employers' || $sSlug == 'individual-employer')){ print 'active'; } ?>" href="jobs">Jobs</a>
                        </li>
                        <li class="nav-item dropdown position-relative">
                            <a class="nav-link <?php if(isset($sSlug) && ($sSlug == 'event' || $sSlug == 'individual-event')){ print 'active'; } ?>" href="event">Events</a>
                        </li>
                        <li class="nav-item dropdown position-relative">
                            <a class="nav-link <?php if(isset($sSlug) && ($sSlug == 'blog' || $sSlug == 'individual-blog')){ print 'active'; } ?>" href="blog">Blog</a>
                        </li>
                        <li class="nav-item dropdown position-relative">
                            <a class="nav-link <?php if(isset($sSlug) && ($sSlug == 'contact')){ print 'active'; } ?>" href="contact">Contact</a>
                        </li>
                    </ul>
                
                    <ul class="navbar-nav d-flex align-items-center ms-auto ms-lg-0 text-nowrap">
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
                            About
                        </a>
                    </h6>
                </div>
                <div class="border-bottom py-2 px-4">
                    <h6 class="border-0 pt-2">
                        <a class="px-0 text-decoration-none text-dark text-uppercase" href="jobs">
                            Jobs
                        </a>
                    </h6>
                </div>
                <div class="border-bottom py-2 px-4">
                    <h6 class="border-0 pt-2">
                        <a class="px-0 text-decoration-none text-dark text-uppercase" href="events">
                            Events
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
                            Contact
                        </a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header END -->
<main class="mx-0">