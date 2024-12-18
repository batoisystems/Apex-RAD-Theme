<nav aria-label="breadcrumb" class="breadcrumb-underline">
    <ol class="breadcrumb">
        <li class="breadcrumb-item d-none d-lg-block"><a href="staff-dashboard"><span><i class="bi bi-house-door"></i></span></a></li>
        <li class="breadcrumb-item d-none d-lg-block"><a href="user"><span>Users</span></a></li>
        <li class="breadcrumb-item d-flex d-lg-none">
            <a class="nav-link " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-chevron-down text-primary me-2"></i>
            </a>                              
            <ol class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li class="dropdown-item text-primary" href="staff-dashboard"><i class="bi bi-chevron-right me-1"></i>Dashboard</li>
                <li class="dropdown-item text-primary" href="user"><i class="bi bi-chevron-right me-1"></i>Users</li>
            </ol>
        </li>
        <li class="breadcrumb-item" aria-current="page"><a class="active-2" href="#"><span>App User</span></a></li>
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
                    <div class="d-md-flex align-items-center p-2">
                        <div class="col-md-1 icon px-2 text-center">
                            <i class="bi bi-info-circle me-0 me-md-1 fs-1 text-muted"></i>
                        </div>
                        <div class="col-md-11 message text-md-start text-center mb-2 mb-md-0">
                            <small>Add a User here. Fields marked (<span class="text-danger">*</span>) are mandatory.</small>
                        </div>
                    </div>
                </div>

                <div class="border-bottom">
                    <div class="row mx-0">
                        <div class="col-md-12 p-3">
                            <label for="name">Name<span class="text-danger">*</span> </label>
                            <input class="form-control" id="name" name="name" type="text" required="">
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="row mx-0">
                        <div class="col-md-6 p-3 border-bottom border-md-0">
                            <label for="email">Email<span class="text-danger">*</span> </label>
                            <input class="form-control" id="email" name="email" type="text" required="">
                        </div>
                        <div class="col-md-6 p-3">
                            <label for="mobile">Mobile<span class="text-danger">*</span> </label>
                            <input class="form-control" id="mobile" name="mobile" type="text" required="">
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