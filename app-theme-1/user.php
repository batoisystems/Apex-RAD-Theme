<nav aria-label="breadcrumb" class="breadcrumb-underline">
    <ol class="breadcrumb">
        <li class="breadcrumb-item d-none d-lg-block"><a href="dashboard"><span><i class="bi bi-house-door"></i></span></a></li>
        <li class="breadcrumb-item d-flex d-lg-none">
            <a class="nav-link " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-chevron-down text-primary me-2"></i>
            </a>                              
            <ol class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li class="dropdown-item text-primary" href="dashboard"><i class="bi bi-chevron-right me-1"></i>Dashboard</li>
            </ol>
        </li>
        <li class="breadcrumb-item" aria-current="page"><a class="active-2" href="#"><span>Users</span></a></li>
        <li class="ms-auto align-self-center">
            <a href="javascript:history.back()" class="breadcrumb-button">
                <i class="bi bi-caret-left" title="Go Back"></i>
            </a>
        </li>
    </ol>
</nav>
<div id="content">
    <div class="d-md-flex alert alert-info align-items-center p-2 mb-4">
        <div class="col-md-1 icon px-2 text-center">
            <i class="bi bi-info-circle me-1 me-0 me-md-1 fs-1 text-muted"></i>                                 
        </div>
        <div class="col-md-11 message text-md-start text-center mb-2 mb-md-0">
            <small><strong>View User details</strong><br>Here you can view user details.</small>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-end mb-4">
            <div class="btn-group">
                <a type="button" class="btn btn-outline-primary d-flex collapsed" href="#advancedSearch" data-bs-toggle="collapse" aria-expanded="false" aria-controls="advancedSearch" title="Advanced Search">
                    <i class="bi bi-search me-md-2"></i><span class="d-none d-md-block">Advanced Search</span>
                </a>
                <a type="button" href="add-user" class="btn btn-outline-primary d-flex" title="Add User">
                    <i class="bi bi-plus-lg me-md-2"></i><span class="d-none d-md-block">Add User</span>
                </a>
            </div>
        </div>
        <section class="collapse" id="advancedSearch">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="userName">Name</label>
                        <input type="text" class="form-control" name="userName" id="userName" value="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="mobileno">Mobile Number</label>
                        <input type="text" class="form-control" name="mobileno" id="mobileno" value="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-md btn-outline-primary" title="Submit"><i class="bi bi-arrow-right-circle me-1"></i> Search</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <table data-addrbar="true" data-toggle="table" data-search="true" data-show-columns="true" id="myTable">
        <thead>
            <tr>
                <th data-field="name" data-sortable="true" class="w-50">User Name</th>
                <th data-field="email" data-sortable="true" class="w-25">Email</th>
                <th data-field="mobile" data-sortable="true" class="w-25">Mobile No</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-value="name"><a href="#">Alice Smith</a></td>
                <td data-value="email">alice.smith@gmail.com</td>	
                <td data-value="mobile">+91 971 656 9174</td>	 	
            </tr>
            <tr>
                <td data-value="name"><a href="#">Globex Corpo</a></td>
                <td data-value="email">globex.corpo@gmail.com</td>	
                <td data-value="mobile">+91 958 223 8518</td>			
            </tr>
            <tr>
                <td data-value="name"><a href="#">Charlotte Patel</a></td>
                <td data-value="email">charlotte.patel@gmail.com</td>	
                <td data-value="mobile">+91 755 258 8882</td>			
            </tr>
            <tr>
                <td data-value="name"><a href="#">Mia Cooper</a></td>
                <td data-value="email">mia.cooper@gmail.com</td>	
                <td data-value="mobile">+91 866 875 9174</td>			
            </tr>
            <tr>
                <td data-value="name"><a href="#">Noah Foster</a></td>
                <td data-value="email">noah.foster@gmail.com</td>	
                <td data-value="mobile">+91 752 223 9625</td>			
            </tr>
        </tbody>
    </table>
    <div class="text-center my-3">
        <button class="btn btn-outline-primary" type="button" title="Load More">
            <i class="bi bi-chevron-down"></i>
        </button>
    </div>
</div>