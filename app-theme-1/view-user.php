<nav aria-label="breadcrumb" class="breadcrumb-underline">
    <ol class="breadcrumb">
        <li class="breadcrumb-item d-none d-lg-block"><a href="staff-dashboard"><span><i class="bi bi-house-door"></i></span></a></li>
        <li class="breadcrumb-item d-none d-lg-block"><a href="student"><span>Students</span></a></li>
        <li class="breadcrumb-item d-flex d-lg-none">
            <a class="nav-link " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-chevron-down text-primary me-2"></i>
            </a>                              
            <ol class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li class="dropdown-item text-primary" href="staff-dashboard"><i class="bi bi-chevron-right me-1"></i>Dashboard</li>
                <li class="dropdown-item text-primary" href="student"><i class="bi bi-chevron-right me-1"></i>Students</li>
            </ol>
        </li>
        <li class="breadcrumb-item" aria-current="page"><a class="active-2" href="#"><span>Alice Smith</span></a></li>
        <li class="ms-auto align-self-center">
            <a href="javascript:history.back()" class="breadcrumb-button">
                <i class="bi bi-caret-left" title="Go Back"></i>
            </a>
        </li>
    </ol>
</nav>
<div id="content">    
    <div class="d-md-flex alert alert-info align-items-center p-1 mb-4">
        <div class="col-md-1 icon px-2 text-center">
            <i class="bi bi-info-circle me-1 fs-1"></i>
        </div>
        <div class="col-md-11 message text-md-start text-center">
            <small>View 'Alice Smith' details here.</small>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-4 mb-4">
            <div class="card h-lg-auto">
                <div class="card-body p-0 d-flex flex-column justify-content-between">
                    <div class="row align-items-center p-4 text-center text-sm-start">
                        <div class="col-12 col-sm-auto">
                            <div class="avatar avatar-5xl">
                                <img class="rounded-circle" src="../../pub/image/img5.png" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-auto flex-1" id="detailsCard">
                            <div class="d-md-flex align-items-center">
                                <h3 class="">Alice Smith</h3>
                            </div>
                            <div>
                                <i class="bi bi-envelope me-2"></i><a href="mailto:alice.smith@gmail.com">alice.smith@gmail.com</a>
                            </div>
                            <div>
                                <i class="bi bi-phone me-2"></i><a class="text-muted" href="tel:+91 971 656 9174">+91 971 656 9174</a>
                            </div>
                            <div>
                                <i class="bi bi-calendar me-2"></i><a class="text-muted">Mar 21, 2002</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center border-top py-3">
                        <div class="text-center">
                            <h6 class="mb-3">Student ID: <span class="text-muted">1107 2024 0021</span></h6>
                            <h6>Payment Dues: <span class="text-muted">INR 15,400.00</span> <a href="#" title="Pay Now"><i class="bi bi-box-arrow-up-right ms-1"></i></a></h6>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="card border-bottom-0">
                <div class="card-header d-flex bg-white align-items-center">
                    <h5 class="card-title mb-0">Programs</h5>
                    <span class="ms-auto">
                        <a href="individual-member-add-service" title="Add Service" class="text-primary text-decoration-none me-2">
                            <i class="bi bi-plus-lg" aria-hidden="true"></i>
                        </a>
                        <a href="individual-member-service-list" title="View All" class="text-primary text-decoration-none">
                            <i class="bi bi-arrow-right" aria-hidden="true"></i>
                        </a>
                    </span>
                </div>
                
                <div class="card-body p-0">
                    <div class="table-responsive scrollbar">
                        <table class="apex-table" data-addrbar="false" class="borderless" data-toggle="table" data-search="false"  data-show-export="false" data-export-types="{'excel'}" data-pagination="false" data-show-columns="false" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>M.Tech</td>
                                    <td>Mar 14, 2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-outline-primary" type="button" title="Load More">
                    <i class="bi bi-chevron-down"></i>
                </button>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="card p-3">
                <div class="timeline-vertical timeline-with-details">
                    <div class="timeline-item position-relative">
                        <div class="row">
                            <div class="col-5 col-sm-auto d-flex">
                                <div class="timeline-item-date me-md-4 me-2">
                                    <p class="small text-muted text-end">Jun 25, 2024<br class="d-md-block"> 4:27 pm</p>
                                </div>
                                <div class="timeline-item-bar position-relative me-0">
                                    <div class="icon-item shadow-none">
                                        <i class="bi bi-tools"></i>
                                    </div>
                                    <span class="timeline-bar border-dashed"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="timeline-item-content ps-0">
                                    <h6>Lesson Understanding Cloud Computing completed</h6>
                                    <p class="text-muted mb-5">Lesson</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item position-relative">
                        <div class="row">
                            <div class="col-5 col-sm-auto d-flex">
                                <div class="timeline-item-date me-md-4 me-2">
                                    <p class="small text-muted text-end">Jun 25, 2024<br class="d-md-block"> 12:15 pm</p>
                                </div>
                                <div class="timeline-item-bar position-relative me-0">
                                    <div class="icon-item shadow-none">
                                        <i class="bi bi-card-checklist"></i>
                                    </div>
                                    <span class="timeline-bar border-dashed"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="timeline-item-content ps-0">
                                    <h6>Test of the academy program completed </h6>
                                    <p class="text-muted mb-5">Test</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item position-relative">
                        <div class="row">
                            <div class="col-5 col-sm-auto d-flex">
                                <div class="timeline-item-date me-md-4 me-2">
                                    <p class="small text-muted text-end">Jun 25, 2024<br class="d-md-block"> 10:30 am</p>
                                </div>
                                <div class="timeline-item-bar position-relative me-0">
                                    <div class="icon-item shadow-none">
                                        <i class="bi bi-tools"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="timeline-item-content ps-0">
                                    <h6>Lesson Introduction to Cloud Computing completed</h6>
                                    <p class="text-muted mb-0">Lesson</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>       
</div>