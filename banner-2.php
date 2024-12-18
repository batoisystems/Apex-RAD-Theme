<div id="content">
    <h1 class="h4 mb-4">Banner</h1>
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <div class="card card-body shadow-none mb-4">
                <h2 class="h5">Banner Only</h2>
                <div id="img-change-banner">
                    <div class="overlay"></div>
                </div>
            </div>

            <div class="card card-body shadow-none mb-4">
                <h2 class="h5">With Text</h2>
                <div id="img-change-banner">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 banner-content">
                                <h1 class="animate__animated animate__fadeInUp fw-light">Lorem ipsum dolor</h1>
                                <h2 class="h5 animate__animated animate__fadeInUp animate__delay-1s mt-4 fw-light">
                                    Sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </h2>
                            </div> 
                        </div>    
                    </div>
                </div>
            </div>

            <div class="card card-body shadow-none mb-4">
                <h2 class="h5">With Search</h2>
                <div id="img-change-banner">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 banner-content">
                                <h1 class="animate__animated animate__fadeInUp fw-light">Lorem ipsum dolor</h1>
                                <form class="animate__animated animate__fadeInUp animate__delay-1s banner-search">
                                    <div class="input-group">
                                        <input class="form-control border-0" type="text" name="search" placeholder="Search...">
                                        <button type="button" class="btn btn-primary rounded">
                                            <span class="d-none d-md-block">Search</span>
                                            <span class="d-md-none"><i class="bi bi-search"></i></span>
                                        </button>
                                    </div>
                                </form>
                            </div> 
                        </div>    
                    </div>
                </div>
            </div>

            <div class="card card-body shadow-none mb-4">
                <h2 class="h5">With Button</h2>
                <div id="img-change-banner">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 banner-content">
                                <h1 class="animate__animated animate__fadeInUp fw-light">Lorem ipsum dolor</h1>
                                <div class="animate__animated animate__fadeInUp animate__delay-1s mt-4">
                                    <a href="#" class="btn btn-white"> Login</a>
                                    <a href="#" class="btn btn-outline-white"> Sign Up</a>
                                </div>
                            </div> 
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    @keyframes changeBackground {
        0%, 100% {
            background-image: url('image/banner-img-1.jpg');
            transform: scale(1); /* Initial scale */
        }
        25% {
            background-image: url('image/banner-img-2.jpg');
            opacity: 1;
            transform: scale(1.2); /* Initial scale */
        }
        50% {
            background-image: url('image/banner-img-3.jpg');
            opacity: 1; /* Start fading out */
            transform: scale(1); /* Initial scale */
        }
        75% {
            background-image: url('image/banner-img-4.jpg');
            opacity: 1; /* Start fading in */
            transform: scale(1.2); /* Initial scale */
        }
    }

    #page-banner{
        background-image: linear-gradient(to bottom, var(--bs-secondary) 0%, rgba(14, 104, 176, 0.5) 100%), url(image/bg-pattern.jpg);
    }
</style>