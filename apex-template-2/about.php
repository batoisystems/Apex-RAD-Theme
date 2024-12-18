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

<!-- About -->
<section class="py-5 mt-0 apex-section" id="about">
    <div class="container">
        <div class="row py-3">
            <div class="mb-4">
                <p class="text-muted apex-section-h5">Batoi is a software development automation company. Batoi <a class="text-secondary">Rapid Application Development (RAD) Platform</a> provides tools for designing and building applications, handling codebase deployment and security, integrating blockchain, AI, AR/VR, and IoT capabilities, and managing software projects. Batoi has been catering to customers across the globe for building, deploying, and managing their software applications since 2010.</p>
            </div>
            <div class="col-lg-6 align-items-center text-start mb-4 mb-lg-0">
                <p class="text-muted">At Batoi, we believe in open innovations in software engineering, customers’ rights to their applications' source code, and achieving sustainable computing goals.</p>
                <div>
                    <div class="d-flex mt-2 batoi-lh-md text-muted">
                        <i class="bi bi-check-lg me-2 text-secondary"></i>
                        14+ Years in Business
                    </div>
                    <div class="d-flex mt-2 batoi-lh-md text-muted">
                        <i class="bi bi-check-lg me-2 text-secondary"></i>
                        5K+ Apps and Sites Built
                    </div>
                    <div class="d-flex mt-2 batoi-lh-md text-muted">
                        <i class="bi bi-check-lg me-2 text-secondary"></i>
                        10+ Industry Verticals Served
                    </div>
                </div>

                <div class="d-flex mt-5">
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

            <div class="col-lg-6 text-end">
                <div class="card shadow-sm hover-shadow border-0 p-3">
                    <img src="../image/img6.png" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-0 apex-section">
    <div class="row">
        <div class="col-md-6 text-white bg-secondary py-5 align-items-center text-start">
            <div class="row pt-2">
                <div class="col-lg-11 col-xl-8 pe-4 ps-5 px-0 ms-auto">
                    <div class="d-flex">
                        <div class="animate__animated animate__fadeInLeft animate__delay-1s ms-md-0 apex-divider-white"></div>
                        <h5 class="animate__animated animate__fadeInLeft animate__delay-1s mt-0 apex-heading text-white">Partners</h5>
                    </div>
                    <h2 class="animate__animated animate__fadeInLeft animate__delay-1s fw-bold mb-1">Batoi Partners Program</h2>
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s mb-0 pt-3">Enhance your digital technology business profitability. Join the Batoi Partners Program. We welcome IT Solution Providers, Web Developers, Hosting Companies, and Content Publishers for a mutually beneficial partnership with Batoi.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-white bg-secondary py-5 align-items-center text-end opacity-9">
            <div class="row">
                <div class="col-lg-11 col-xl-8 pe-5 ps-4 px-0">
                    <div class="d-inline-flex">
                        <div class="animate__animated animate__fadeInRight animate__delay-1s ms-md-0 apex-divider-white"></div>
                        <h5 class="animate__animated animate__fadeInRight animate__delay-1s mt-0 apex-heading text-white">Academy</h5>
                    </div>
                    <h2 class="animate__animated animate__fadeInRight animate__delay-1s fw-bold mb-1">Batoi Academy</h2>
                    <p class="animate__animated animate__fadeInRight animate__delay-1s mb-0 pt-3">Your Gateway to Digital Innovation, Learning, and Research. A comprehensive platform designed to empower academic institutions, career professionals, and innovators with the tools and knowledge to excel in the digital age.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 mt-0 apex-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 pe-lg-5">
                <div class="card shadow-sm hover-shadow border-0 p-3">
                    <img src="../image/img4.png" alt="" class="w-100">
                </div>
            </div>
            <div class="col-lg-7 align-items-center text-start mt-5 mt-lg-0">
                <p class="text-muted apex-section-h5">At Batoi Academy, we believe that learning and innovation should be accessible to everyone. That’s why we offer a range of flexible pricing plans for individuals, academic institutions, and incubation centers. Whether you’re a student, a professional looking to upskill, or an institution seeking to foster innovation through research and digital labs, we have a plan for you.</p>
                <p class="text-muted mb-4">The access plans to Batoi Academy are divided into institutional plans for universities, academic institutions, and incubation centers, as well as individual plans for career professionals.</p>
                <div class="row">
                    <!-- count item -->
                    <div class="col-6">
                        <div class="text-start text-secondary">
                            <h1 class="fw-bold mt-2 mb-0"><span class="purecounter">14</span>+</h1>
                            <h6 class="mb-0 fw-semibold">Years in Business</h6>
                        </div>
                    </div>
                    <!-- count item -->
                    <div class="col-6">
                        <div class="text-start text-secondary">
                            <h1 class="fw-bold mt-2 mb-0"><span class="purecounter">5</span>K+</h1>
                            <h6 class="mb-0 fw-semibold">Apps and Sites Built</h6>
                        </div>
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
