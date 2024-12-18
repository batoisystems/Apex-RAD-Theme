    <div id="content">
        <h1 class="h4 mb-4">Horizontal Tab</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body shadow-none mb-4">
                    <h2 class="h5">Nav Tabs</h2>
                    <div class="row d-flex">
                        <div class="col-12">
                            <ul class="nav nav-tabs" id="my-tab" role="tablist">
                                <li class="nav-item pe-2">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item pe-2">
                                    <a class="nav-link" data-bs-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="true">Menu 1</a>
                                </li>
                                <li class="nav-item pe-2">
                                    <a class="nav-link" data-bs-toggle="tab" href="#menu2" role="tab" aria-controls="menu2" aria-selected="true">Menu 2</a>
                                </li>
                                <li class="nav-item pe-2">
                                    <a class="nav-link" data-bs-toggle="tab" href="#menu3" role="tab" aria-controls="menu3" aria-selected="true">Menu 3</a>
                                </li>
                            </ul>
                            
                            <div class="tab-content text-start" id="my-tab-content">
                                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home">
                                    <div class="mt-4">
                                        <h2 class="h5">Home</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="menu1" role="tabpanel" aria-labelledby="menu1">
                                    <div class="mt-4">
                                        <h2 class="h5">Menu 1</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="menu2" role="tabpanel" aria-labelledby="menu2">
                                    <div class="mt-4">
                                        <h2 class="h5">Menu 2</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="menu3" role="tabpanel" aria-labelledby="menu3">
                                    <div class="mt-4">
                                        <h2 class="h5">Menu 3</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-body shadow-none mb-4">
                    <div>
                        <h2 class="h5">Circular Pills</h2>
                        <ul class="nav nav-circular justify-content-center mb-4" id="pills-tab" role="tablist">
                            <!-- Loop to create tabs A-Z -->
                            <?php 
                            foreach (range('A', 'Z') as $key => $letter){
                                $sActiveTab = "";
                                if($key == 0)
                                {
                                    $sActiveTab = "active";
                                }
                            ?>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link <?php print $sActiveTab;?>" id="pills-<?php print $letter; ?>-tab" data-bs-toggle="pill" href="#pills-<?php print $letter; ?>" role="tab" aria-controls="pills-<?php print $letter; ?>" aria-selected="false"><?php print $letter; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <!-- <div class="card card-body shadow-none mb-4">
                    <h2 class="h5">Nav Pills</h2>
                    <ul class="nav nav-pills nav-justified" id="apexNavPills">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#menu5">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#menu6">Menu 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#menu7">Menu 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#menu8">Menu 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#menu9">Menu 4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#menu10">Menu 5</a>
                        </li>
                    </ul>
                    <div class="tab-content text-start">
                        <div class="tab-pane fade active show" id="menu5" role="tabpanel" aria-labelledby="menu5">
                            <div class="mt-4">
                                <h2 class="h5">Home</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="menu6" role="tabpanel" aria-labelledby="menu6">
                            <div class="mt-4">
                                <h2 class="h5">Menu 1</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="menu7" role="tabpanel" aria-labelledby="menu7">
                            <div class="mt-4">
                                <h2 class="h5">Menu 2</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="menu8" role="tabpanel" aria-labelledby="menu8">
                            <div class="mt-4">
                                <h2 class="h5">Menu 3</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="menu9" role="tabpanel" aria-labelledby="menu9">
                            <div class="mt-4">
                                <h2 class="h5">Menu 4</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="menu10" role="tabpanel" aria-labelledby="menu10">
                            <div class="mt-4">
                                <h2 class="h5">Menu 5</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="card card-body shadow-none mb-4">
                    <h2 class="h5">Nav Pills</h2>
                    <div class="mt-3">
                        <div class="row nav text-center" id="apexNavPills">
                            <div class="col-6 col-sm-4 col-lg-2 mb-3">
                                <a href="#menu5" data-bs-toggle="pill" class="badge active">Home</a>
                            </div>
                            <div class="col-6 col-sm-4 col-lg-2 mb-3">
                                <a href="#menu6" data-bs-toggle="pill" class="badge">Menu 1</a>
                            </div>
                            <div class="col-6 col-sm-4 col-lg-2 mb-3">
                                <a href="#menu7" data-bs-toggle="pill" class="badge">Menu 2</a>
                            </div>
                            <div class="col-6 col-sm-4 col-lg-2 mb-3">
                                <a href="#menu8" data-bs-toggle="pill" class="badge">Menu 3</a>
                            </div>
                            <div class="col-6 col-sm-4 col-lg-2 mb-3">
                                <a href="#menu9" data-bs-toggle="pill" class="badge">Menu 4</a>
                            </div>
                            <div class="col-6 col-sm-4 col-lg-2 mb-3">
                                <a href="#menu10" data-bs-toggle="pill" class="badge">Menu 5</a>
                            </div>
                        </div>
                        <div class="tab-content text-start">
                            <div class="tab-pane fade active show" id="menu5" role="tabpanel" aria-labelledby="menu5">
                                <div class="mt-4">
                                    <h2 class="h5">Home</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="menu6" role="tabpanel" aria-labelledby="menu6">
                                <div class="mt-4">
                                    <h2 class="h5">Menu 1</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="menu7" role="tabpanel" aria-labelledby="menu7">
                                <div class="mt-4">
                                    <h2 class="h5">Menu 2</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="menu8" role="tabpanel" aria-labelledby="menu8">
                                <div class="mt-4">
                                    <h2 class="h5">Menu 3</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="menu9" role="tabpanel" aria-labelledby="menu9">
                                <div class="mt-4">
                                    <h2 class="h5">Menu 4</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="menu10" role="tabpanel" aria-labelledby="menu10">
                                <div class="mt-4">
                                    <h2 class="h5">Menu 5</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>