<!-- Banner -->
<section class="apex-section bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-items-center">
                <h1 class="mb-0 fw-bold"><?php print $sPageTitle;?></h1>
            </div>
        </div>
    </div>
</section>

<section class="py-5 apex-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <p class="animate__animated animate__fadeInLeft animate__delay-1s text-muted apex-section-h5">Batoi Rapid Application Development (RAD) Platform provides tools for designing and building applications, handling codebase deployment and security, integrating blockchain, AI, AR/VR, and IoT capabilities, and managing software projects.</p>
            </div>
            <div class="col-lg-4">
                <div class="d-flex mb-4 mb-md-0">
                    <svg id="pieChart" width="180" height="180" viewBox="-10 -10 225 225">
                        <filter id="dropShadow">
                            <feGaussianBlur in="SourceAlpha" stdDeviation="2" />
                            <feOffset dx="1" dy="2" />
                            <feComponentTransfer>
                            <feFuncA type="linear" slope="0.3" />
                            </feComponentTransfer>
                            <feMerge>
                            <feMergeNode />
                            <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>
                        <defs>
                            <linearGradient id="outerGradient" x1="50%" y1="0%" x2="50%" y2="100%">
                            <stop offset="10%" stop-color="#ccc" />
                            <stop offset="90%" stop-color="#fff" />
                            </linearGradient>
                        </defs>
                        <g id="pie">
                            <!-- Background stroke -->
                            <circle r="100" cy="100" cx="100" fill="none" stroke="#f8f9fa" stroke-width="18" /> <!-- Background color -->
                            <circle id="graph" r="100" cy="100" cx="100" fill="none" stroke="#00B696" stroke-width="18" />
                            <g id="innerText" transform="translate(0 13)">
                                <text id="updatingText" x="80" y="90" font-family="proxima-nova" font-size="25" fill="#000"> 85% </text>
                            </g>
                        </g>
                    </svg>
                    <h5 class="align-self-center fw-bold ms-4">Successful cases <br> in 14 years.</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="my-0">

<!-- About -->
<section class="py-5 apex-section">
    <div class="container">
        <div class="d-flex">
            <div class="animate__animated animate__fadeInLeft animate__delay-1s ms-md-0 apex-divider-secondary"></div>
            <h5 class="animate__animated animate__fadeInLeft animate__delay-1s mt-0 apex-heading">Team</h5>
        </div>
        <h2 class="animate__animated animate__fadeInLeft animate__delay-1s fw-bold mt-1">Experienced Team</h2>
        <p class="animate__animated animate__fadeInLeft animate__delay-1s text-muted fw-semibold pt-2 mb-4">Batoi is a software development automation company.</p>
        <div class="row">
            <div class="col-md-6">
                <div class="row py-2">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="card shadow-sm hover-shadow border-0 p-3">
                            <img src="https://www.batoi.com/pub/assets/2024/09/24/ashwinirath.jpg" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <span class="small text-muted">Founder and CEO</span>
                        <h4 class="fw-bold mb-0">Ashwini Kumar Rath</h4>
                        <p class="text-muted mb-3 mt-2">Responsible for the product development and strategic affairs of Batoi and its subsidiaries. </p>
                        <a href="#" class="text-uppercase small fw-semibold">View More <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="py-5 mt-0 apex-section bg-primary" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-items-center text-start text-white">
                <div class="d-flex">
                    <div class="animate__animated animate__fadeInLeft animate__delay-1s ms-md-0 apex-divider-white"></div>
                    <h5 class="animate__animated animate__fadeInLeft animate__delay-1s mt-0 apex-heading text-white">Contact Us</h5>
                </div>
                <h2 class="animate__animated animate__fadeInLeft animate__delay-1s fw-bold mb-1">Have questions?</h2>
                <p class="animate__animated animate__fadeInLeft animate__delay-1s fw-semibold mb-0">It is easy to reach us</p>
            </div>
            <div class="col-lg-6 text-white my-auto d-md-flex mt-5 mt-md-4 justify-content-lg-end">
                <h6 class="my-auto me-4 animate__animated animate__fadeInRight animate__delay-1s">
                    <i class="bi bi-phone contact-icon me-1"></i>
                    <span class="fw-bold ms-2">+91 (674) 350 0200</span>
                </h6>
                <a href="contact" class="btn btn-white py-3 px-5 text-uppercase mt-4 mt-md-0 animate__animated animate__fadeInRight animate__delay-1s">
                    <small>Contact Us</small>
                </a>
            </div>
        </div>
    </div>
</section>