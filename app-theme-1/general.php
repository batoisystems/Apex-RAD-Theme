<nav aria-label="breadcrumb" class="breadcrumb-underline">
    <ol class="breadcrumb">
        <li class="breadcrumb-item d-none d-lg-block"><a href="subscriber-dashboard"><span><i class="bi bi-house-door"></i></span></a></li>
        <li class="breadcrumb-item d-none d-lg-block"><a href="setting"><span>Settings</span></a></li>
        <li class="breadcrumb-item d-flex d-lg-none">
            <a class="nav-link " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-chevron-down text-primary me-2"></i>
            </a>                              
            <ol class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li class="dropdown-item text-primary" href="subscriber-dashboard"><i class="bi bi-chevron-right me-1"></i>Dashboard</li>
                <li class="dropdown-item text-primary" href="setting"><i class="bi bi-chevron-right me-1"></i>Settings</li>
            </ol>
        </li>
        <li class="breadcrumb-item" aria-current="page"><a class="active-2" href="#"><span>General</span></a></li>
        <li class="ms-auto align-self-center">
            <a href="javascript:history.back()" class="breadcrumb-button">
                <i class="bi bi-caret-left" title="Go Back"></i>
            </a>
        </li>
    </ol>
</nav>
<div id="content">
    <form action="" id="" method="POST">
        <div class="card">
            <div class="card-body p-0">
                <div class="border-bottom">
                    <div class="d-md-flex align-items-center p-0">
                        <div class="col-md-1 icon px-2 text-center">
                            <i class="bi bi-info-circle me-0 me-md-1 fs-1 text-info"></i>
                        </div>
                        <div class="col-md-11 message text-md-start text-center mb-2 mb-md-0">
                            <small>Fields marked (<span class="text-danger">*</span>) are mandatory.</small>
                        </div>
                    </div>
                </div> 

                <div class="border-bottom">
                    <div class="row mx-0">
                        <div class="col-md-8 p-3">
                            <label for="title">Title<span class="text-danger">*</span> 
                                <a href="#" class="info-tooltip" title="Draft a title that clearly communicates the content and benefits of your blog post. Ensure the title is concise, ideally between 50-60 characters.">
                                    <i class="bi bi-info-circle me-1 text-info d-md-none"></i> 
                                </a>
                            </label>
                            <input type="text" name="title" id="title" class="form-control" required="" value="Future Focus: Analyzing Tomorrow's Tech Today">
                        </div>
                        <div class="col-md-4 bg-light border-start d-none d-md-block p-3 small">
                            <span>Draft a title that clearly communicates the content and benefits of your blog post. Ensure the title is concise, ideally between 50-60 characters.</span>
                        </div>
                    </div>
                </div>

                <div class="border-bottom">
                    <div class="row mx-0">
                        <div class="col-md-8 p-3">
                            <label for="organization">Organization Name<span class="text-danger">*</span>
                                <a href="#" class="info-tooltip" title="Select your organization space name. Ensure that you have select the organization name correctly.">
                                    <i class="bi bi-info-circle me-1 text-info d-md-none"></i> 
                                </a>
                            </label>
                            <select class="form-select" id="organization" aria-label="Default select example">
                                <option selected="">Select</option>
                                <option selected="">BeyondTech</option>
                                <option value="2">FutureDrive</option>
                                <option value="3">Electronix Systemz</option>
                                <option value="4"> Starstruck Solutions</option>
                            </select>
                        </div>
                        <div class="col-md-4 bg-light border-start d-none d-md-block p-3 small">
                            <span>Select your organization space name. Ensure that you have select the organization name correctly.</span>
                        </div>
                    </div>
                </div>

                <div class="border-bottom">
                    <div class="row mx-0">
                        <div class="col-md-8 p-3">
                            <label for="image">Featured image mandatory?
                                <a href="#" class="info-tooltip" title="List the main topics or categories your blog will cover. Incorporate important keywords related to your blog’s content to improve search engine visibility. Write a brief but compelling description, ideally between 150-160 characters.">
                                    <i class="bi bi-info-circle me-1 text-info d-md-none"></i> 
                                </a>
                            </label>
                            <div class="d-flex">
                                <span class="me-2">No</span>
                                <label class="switch my-auto" data-bs-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="">
                                    <input type="checkbox" name="is_image" id="is_image" class="" data-div="">
                                    <span class="slider round"></span>
                                </label>
                                <input type="hidden" id="is_image_hide" name="is_image_hide" value="N">
                                <span class="ms-2">Yes</span>
                            </div>
                        </div>
                        <div class="col-md-4 bg-light border-start d-none d-md-block p-3 small">
                            <span>List the main topics or categories your blog will cover.</span>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="row mx-0">
                        <div class="col-md-8 p-3">
                            <label for="description">Description
                                <a href="#" class="info-tooltip" title="List the main topics or categories your blog will cover. Incorporate important keywords related to your blog’s content to improve search engine visibility. Write a brief but compelling description, ideally between 150-160 characters.">
                                    <i class="bi bi-info-circle me-1 text-info d-md-none"></i> 
                                </a>
                            </label>
                            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="col-md-4 bg-light border-start d-none d-md-block p-3 small">
                            <span>List the main topics or categories your blog will cover. Incorporate important keywords related to your blog’s content to improve search engine visibility. Write a brief but compelling description, ideally between 150-160 characters.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white">
                <button type="submit" class="btn btn-primary"><i class="bi bi-arrow-right-circle me-1"></i> Submit</button>
            </div>
        </div>
    </form>
</div>