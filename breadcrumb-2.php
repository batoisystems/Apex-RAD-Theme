<?php 
    $current_page = 'breadcrumb';
?>

    <div id="content">
        <h1 class="h4 mb-4">Breadcrumb</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body shadow-none mb-4">
                    <div>
                        <nav aria-label="breadcrumb" class="breadcrumb-underline border-top">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item ps-0" aria-current="page">
                                    <a class="active-2" href="#"><span>Dashboard</span>
                                    </a>
                                </li>
                            </ol>
                        </nav> 
                    </div>
                    <div class="mt-4"> 
                        <nav aria-label="breadcrumb" class="breadcrumb-underline border-top">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item d-none d-lg-block"><a href="#"><span><i class="bi bi-house-door"></i></span></a></li>
                                <li class="breadcrumb-item d-none d-lg-block"><a href="#"><span>Users</span></a></li>
                                <li class="breadcrumb-item d-flex d-lg-none">
                                    <a class="nav-link " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bi bi-chevron-down text-primary me-2"></i>
                                    </a>                              
                                    <ol class="dropdown-menu py-0" aria-labelledby="dropdownMenuButton">
                                        <li class="dropdown-item"><a href="#"><i class="bi bi-chevron-right me-1"></i> Dashboard</a></li>
                                        <li class="dropdown-item border-top"><a href="#"><i class="bi bi-chevron-right me-1"></i> Users</a></li>
                                    </ol>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"><a class="active-2" href="#"><span>Add User
                                </span></a></li>
                                <li class="ms-auto align-self-center">
                                    <a href="#" class="breadcrumb-button">
                                        <i class="bi bi-caret-left" title="Go Back"></i>
                                    </a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- <div class="card card-body shadow-none">
                    <div class="mt-4">
                        <div class="container text-center text-muted">
                            <nav style="--bs-breadcrumb-divider: '.';" aria-label="breadcrumb">
                                <ol class="breadcrumb-pub border-0 d-flex justify-content-center">
                                    <li class="breadcrumb-pub"><a href="home.html">Home</a></li>
                                    <li class="breadcrumb-pub active" aria-current="page">Pricing</li>
                                </ol>
                            </nav>    
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>