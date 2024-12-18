    <div id="content">
        <h1 class="h4 mb-4">Vertical Tab</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body shadow-none mb-4">
                    <div class="row">
                        <div class="col-md-3 pe-0 border-end d-none d-md-block">
                            <div class="accordion mt-5" id="accordionExample">
                                <div class="bg-transparent">
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <ul class="list-group tab-menu" role="tablist"> 
                                            <li class="list-group-item" aria-selected="false" tabindex="-1" role="tab">
                                                <a class="nav-link active" data-bs-toggle="pill" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                                    Home
                                                </a>
                                            </li>
                                            <li class="list-group-item" aria-selected="false" tabindex="-1" role="tab">
                                                <a class="nav-link" data-bs-toggle="pill" href="#menu1" role="tab" aria-controls="menu1" aria-selected="true">
                                                    Menu 1
                                                </a>
                                            </li>
                                            <li class="list-group-item" aria-selected="false" tabindex="-1" role="tab">
                                                <a class="nav-link" data-bs-toggle="pill" href="#menu2" role="tab" aria-controls="menu2" aria-selected="true">
                                                    Menu 2
                                                </a>
                                            </li>
                                            <li class="list-group-item" aria-selected="false" tabindex="-1" role="tab">
                                                <a class="nav-link" data-bs-toggle="pill" href="#menu3" role="tab" aria-controls="menu3" aria-selected="true">
                                                    Menu 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-block d-md-none">
                            <a href="#" id="ClicktoView" class="btn btn-outline-primary me-1 dropdown-toggle w-100" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="bi bi-justify" aria-hidden="true"></i>
                                <span class="ms-1">
                                    Click to View
                                </span>
                                <div class="triangle-up-dropmenu" style="top: 40px; left: 9px;"></div>
                            </a>
                            <ul class="dropdown-menu py-0" aria-labelledby="navbarDropdown" role="tablist">
                                <li>
                                    <a class="dropdown-item" data-bs-toggle="pill" role="tab" aria-controls="home" aria-selected="true" href="#home"> Home</a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-top" data-bs-toggle="pill" role="tab" aria-controls="menu1" aria-selected="true"  href="#menu1"> Menu 1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-top" data-bs-toggle="pill" role="tab" aria-controls="menu2" aria-selected="true"  href="#menu2"> Menu 2</a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-top" data-bs-toggle="pill" role="tab" aria-controls="menu3" aria-selected="true"  href="#menu3"> Menu 3</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-9 mt-5">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="h5">Home</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="menu1" role="tabpanel" aria-labelledby="menu1">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="h5"> Menu 1</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="menu2" role="tabpanel" aria-labelledby="menu2">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="h5"> Menu 2</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="menu3" role="tabpanel" aria-labelledby="menu3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="h5"> Menu 3</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-body shadow-none mb-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mt-0 nav flex-column vertical-nav nav-pills border-bottom border-end" role="tablist">
                                <a class="nav-link border-start border-top ms-0 py-3 active" data-bs-toggle="tab" data-bs-target="#menu5" role="tab" aria-selected="true">
                                    <div class="d-flex w-100 align-items-center">
                                        <span>Home</span>
                                    </div>
                                </a>
                                <a class="nav-link border-start border-top ms-0 py-3" data-bs-toggle="tab" data-bs-target="#menu6" role="tab" aria-selected="false" tabindex="-1">
                                    <div class="d-flex w-100 align-items-center">
                                        <span>Menu 1</span>
                                    </div>
                                </a>
                                <a class="nav-link border-start border-top ms-0 py-3" data-bs-toggle="tab" data-bs-target="#menu7" role="tab" aria-selected="false" tabindex="-1">
                                    <div class="d-flex w-100 align-items-center">
                                        <span>Menu 2</span>
                                    </div>
                                </a>
                                <a class="nav-link border-start border-top ms-0 py-3" data-bs-toggle="tab" data-bs-target="#menu8" role="tab" aria-selected="false" tabindex="-1">
                                    <div class="d-flex w-100 align-items-center">
                                        <span>Menu 3</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="menu5" role="tabpanel" aria-labelledby="menu5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="h5">Home</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="menu6" role="tabpanel" aria-labelledby="menu6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="h5">Menu 1</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="menu7" role="tabpanel" aria-labelledby="menu7">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="h5">Menu 2</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="menu8" role="tabpanel" aria-labelledby="menu8">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="h5">Menu 3</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-body shadow-none mb-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div>
                                <div class="border">
                                    <div class="row">
                                        <div class="col-12 text-start vertical-nav nav-pills">
                                            <a class="nav-link ms-0 p-4 active text-primary" href="#">
                                                <div class="d-flex w-100 align-items-center h5 text-primary mb-0">
                                                    <span>ଶ୍ରୀ ଜଗନ୍ନାଥ ଚଉତିଶା</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="p-4 border border-top-0" id="headingOne">
                                    <h5 class="mb-0">
                                        <a class="accordion custom-dropdown-btn w-100 text-dark" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="row">
                                                <div class="col-10 text-start">
                                                    ଭଜନ
                                                </div>
                                                <div class="col-2 text-end d-flex align-items-center justify-content-end">
                                                    <i class="bi float-end custom-dropdown-icon bi-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                    <div class="card-body p-0 apex-dropdown">
                                        <ul class="stepper nav flex-column vertical-nav nav-pills border-start border-end" role="tablist">
                                            <li class="nav-link mb-0 ms-0 d-flex py-3 ps-5">
                                                <a class="unfinished"><div class="circle"><span>1</span></div></a>
                                                <div class="ms-3 align-self-center">
                                                    <a href="#">ଜ୍ଞାନର ପ୍ରଦୀପ ଜାଳିଦିଅ ପ୍ରଭୁ</a>
                                                </div>	
                                            </li>
                                            <li class="nav-link mb-0 ms-0 d-flex border-top py-3 ps-5">
                                                <a class="unfinished"><div class="circle"><span>2</span></div></a>
                                                <div class="ms-3 align-self-center">
                                                    <a href="#"> ମନୁଆଁ ଭଜ ରାମ ରଘୁମଣି</a>
                                                </div>	
                                            </li>
                                            <li class="nav-link mb-0 ms-0 d-flex border-top py-3 ps-5">
                                                <a class="unfinished"><div class="circle"><span>3</span></div></a>
                                                <div class="ms-3 align-self-center">
                                                    <a href="#"> ଯାଅ ଯାଅ ଦୂତି ଏ ମୋର ଭାରତୀ</a>
                                                </div>	
                                            </li>
                                            <li class="nav-link mb-0 ms-0 d-flex border-top py-3 ps-5">
                                                <a class="unfinished"><div class="circle"><span>4</span></div></a>
                                                <div class="ms-3 align-self-center">
                                                    <a href="#"> ସେହି ଶ୍ୟାମ ଲାଗି ହେବି ବାସ ତ୍ୟାଗି</a>
                                                </div>	
                                            </li>
                                            <li class="nav-link mb-0 ms-0 d-flex border-top py-3 ps-5">
                                                <a class="unfinished"><div class="circle"><span>5</span></div></a>
                                                <div class="ms-3 align-self-center">
                                                    <a href="#"> ରାଇ ବିନୋଦିନୀ ଧନି ହୋଇ କାମେ ବଶ</a>
                                                </div>	
                                            </li>
                                            <li class="nav-link mb-0 ms-0 d-flex border-top py-3 ps-5">
                                                <a class="unfinished"><div class="circle"><span>6</span></div></a>
                                                <div class="ms-3 align-self-center">
                                                    <a href="#"> ଶୁଣ ହେ ଭକତଗଣ ନାମ ସଂକୀର୍ତନ</a>
                                                </div>	
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="loadNextBio" class="card-body border py-3 text-center">
                                        <button class="btn btn-outline-primary" type="button" title="Load More">
                                            <i class="bi bi-chevron-down"></i>
                                        </button>
                                    </div>         
                                </div>
                            </div>
                            
                            <div>
                                <div class="p-4 border border-top-0" id="headingOne">
                                    <h5 class="mb-0">
                                        <a class="accordion custom-dropdown-btn w-100 text-dark" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            <div class="row">
                                                <div class="col-10 text-start">
                                                    ଜଣାଣ
                                                </div>
                                                <div class="col-2 text-end d-flex align-items-center justify-content-end">
                                                    <i class="bi float-end custom-dropdown-icon bi-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                    <div class="card-body p-0 apex-dropdown">
                                        <ul class="stepper nav flex-column vertical-nav nav-pills border-start border-end" role="tablist">
                                            <li class="nav-link mb-0 ms-0 d-flex py-3 ps-5">
                                                <a class="unfinished"><div class="circle"><span>1</span></div></a>
                                                <div class="ms-3 align-self-center">
                                                    <a href="#">ଜ୍ଞାନର ପ୍ରଦୀପ ଜାଳିଦିଅ ପ୍ରଭୁ</a>
                                                </div>	
                                            </li>
                                            <li class="nav-link mb-0 ms-0 d-flex border-top py-3 ps-5">
                                                <a class="unfinished"><div class="circle"><span>2</span></div></a>
                                                <div class="ms-3 align-self-center">
                                                    <a href="#"> ମନୁଆଁ ଭଜ ରାମ ରଘୁମଣି</a>
                                                </div>	
                                            </li>
                                            <li class="nav-link mb-0 ms-0 d-flex border-top py-3 ps-5">
                                                <a class="unfinished"><div class="circle"><span>3</span></div></a>
                                                <div class="ms-3 align-self-center">
                                                    <a href="#"> ଯାଅ ଯାଅ ଦୂତି ଏ ମୋର ଭାରତୀ</a>
                                                </div>	
                                            </li>
                                            <li class="nav-link mb-0 ms-0 d-flex border-top py-3 ps-5">
                                                <a class="unfinished"><div class="circle"><span>4</span></div></a>
                                                <div class="ms-3 align-self-center">
                                                    <a href="#"> ସେହି ଶ୍ୟାମ ଲାଗି ହେବି ବାସ ତ୍ୟାଗି</a>
                                                </div>	
                                            </li>
                                            <li class="nav-link mb-0 ms-0 d-flex border-top py-3 ps-5">
                                                <a class="unfinished"><div class="circle"><span>5</span></div></a>
                                                <div class="ms-3 align-self-center">
                                                    <a href="#"> ରାଇ ବିନୋଦିନୀ ଧନି ହୋଇ କାମେ ବଶ</a>
                                                </div>	
                                            </li>
                                            <li class="nav-link mb-0 ms-0 d-flex border-top py-3 ps-5">
                                                <a class="unfinished"><div class="circle"><span>6</span></div></a>
                                                <div class="ms-3 align-self-center">
                                                    <a href="#"> ଶୁଣ ହେ ଭକତଗଣ ନାମ ସଂକୀର୍ତନ</a>
                                                </div>	
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="loadNextBio" class="card-body border py-3 text-center">
                                        <button class="btn btn-outline-primary" type="button" title="Load More">
                                            <i class="bi bi-chevron-down"></i>
                                        </button>
                                    </div>         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>