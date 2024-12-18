<div id="content">
    <h1 class="h4 mb-4">Banner</h1>
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <div class="card card-body shadow-none mb-4">
                <h2 class="h5">Zoom In/Out Banner</h2>
                <div id="apex-banner" class="apex-section d-flex align-items-center position-relative border-0" style="background-image:url(image/slider-img-1.jpg); background-position: center center; background-size: cover;">
                    <!-- <div class="overlay-dark"></div> -->
                    <div class="container pb-5">
                        <div class="row">
                            <div class="col-lg-8 mx-auto text-center mb-5 mb-lg-0 d-flex align-items-center">
                                <div>
                                    <h1 class="animate__animated animate__fadeInUp mt-2 fw-light">Build multi-user enterprise-grade applications with API</h1>
                                    <h5 class="animate__animated animate__fadeInUp animate__delay-1s apex-section-h5 mt-3 fw-light">Integrate blockchain, AI, AR/VR, and IoT capabilities into your application. Deploy anywhere with access to source code, documentation, and telemetry.</h5>
                                </div> 
                            </div> 
                        </div>    
                    </div>
                </div>
            </div>
            <div class="card card-body shadow-none mb-4">
                <h2 class="h5">Slide Banner</h2>
                <div class="apex-section text-center text-md-start">
                    <div class="bg-light">
                        <div id="apex-carousel" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators/dots -->
                            <div class="carousel-indicators d-none">
                                <button type="button" data-bs-target="#apex-carousel" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#apex-carousel" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#apex-carousel" data-bs-slide-to="2"></button>
                                <button type="button" data-bs-target="#apex-carousel" data-bs-slide-to="3"></button>
                            </div>
                            
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner" id="page-title">
                                <div class="carousel-item active">
                                    <img src="image/slider-img-1.jpg" class="apex-carousel-img bg-light" alt="...">
                                </div>

                                <div class="carousel-item">
                                    <img src="image/slider-img-2.jpg" class="apex-carousel-img bg-light" alt="...">
                                </div>

                                <div class="carousel-item">
                                    <img src="image/slider-img-3.jpg" class="apex-carousel-img bg-light" alt="...">
                                </div>
                                <!-- <div class="overlay-dark"></div> -->
                                <div class="carousel-caption">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 align-items-center text-center">
                                                <h1 class="animate__animated animate__fadeInUp animate__delay-1s mt-2">Build multi-user enterprise-grade applications with API</h1>
                                                <p class="animate__animated animate__fadeInUp animate__delay-1s mt-3">Integrate blockchain, AI, AR/VR, and IoT capabilities into your application. Deploy anywhere with access to source code, documentation, and telemetry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#apex-carousel" data-bs-slide="prev">
                                <i class="bi bi-chevron-left h3 text-white"></i>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#apex-carousel" data-bs-slide="next">
                                <i class="bi bi-chevron-right h3 text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
#apex-banner {
            padding-bottom: 4rem;
            padding-top: 4rem;
            height: 500px;
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
				background-image: url('image/slider-img-1.jpg');
				transform: scale(1); /* Initial scale */
			}
			17% {
				opacity: 1;
				transform: scale(1.2); /* Initial scale */
			}
			33% {
				background-image: url('image/slider-img-2.jpg');
				opacity: 1; /* Start fading out */
				transform: scale(1); /* Initial scale */
			}
			50% {
				opacity: 1;
                transform: scale(1.2);
			}
			66% {
				background-image: url('image/slider-img-3.jpg');
				opacity: 1; /* Start fading in */
				transform: scale(1); /* Initial scale */
			}
            83% {
				opacity: 1;
                transform: scale(1.2);
			}
		}
</style>