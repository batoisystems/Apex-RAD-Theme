<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $sPageTitle;?></title>

    <!-- Font -->
    <link rel="stylesheet" href="https://use.typekit.net/vhf0oxf.css">          

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
    <!-- Bootstrap Table -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/jquery-resizable-columns@0.2.3/dist/jquery.resizableColumns.css" rel="stylesheet">
    <link href="https://unpkg.com/bootstrap-table@1.20.2/dist/bootstrap-table.min.css" rel="stylesheet">

	<!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

	<!-- Chosen CSS -->
    <link rel="stylesheet" href="https://www.batoi.com/pub/css/chosen.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../../cloudspace/pub/css/app.css">
	<style>
		.no-img-sidebar {
			height: calc(100% - 83px) !important;
		}
	</style>
</head>
<body>

<div class="wrapper">
	<nav class="navbar navbar-expand navbar-theme sticky-top w-100">
		<div>
			<a href="#" class="sidebar-toggle text-center text-secondary" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
				<i class="bi bi-justify mx-auto"></i>
			</a>
		</div>
		<div class="d-flex align-items-center">
			<a class="navbar-brand" href="dashboard">
				<img class="align-top navbar-logo" src="image/batoi-logo.png" alt="logo">
			</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item dropdown ms-2">
					<a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">
						<div class="user-account-preview-icon"></div>
					</a>
					<div class="dropdown-menu language-dropmenu navbar-dropmenu-enterprise prevent-close py-0 mt-0" aria-labelledby="userDropdown">        
						<div class="dropdown-item text-center py-3">
							<h6 class="font-weight-normal mb-1 flex-grow-1 name">Charles Christopher</h6>
							<div class="text-muted email">christopher@gmail.com</div>
						</div>
						<div class="account-menus">
							<a class="dropdown-item" href="#">
								<i class="align-middle me-2 bi bi-pencil"></i>
								Edit Profile
							</a>
							<a class="dropdown-item" href="#">
								<i class="align-middle me-2 bi bi-key"></i>
								Change Password
							</a>
						</div>
						<a class="dropdown-item rounded-0 text-white text-center logout-btn" href="#"><i class="bi bi-box-arrow-right me-1" aria-hidden="true"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	<div id="sidebar" class="pt-0">
        <!-- <div class="text-center border-bottom">
            <div class="d-flex align-items-center justify-content-center text-center sidebar-header"><a href="blog-list"><i class="bi bi-arrow-left-circle me-2"></i>My Blogs</a></div>
        </div> -->
		
		<div id="sidebar-content" class="no-img-sidebar w-100">
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 
					<?php 
					if(isset($sSlug) && (
						$sSlug == 'dashboard'
					)){ print 'active'; } ?>
				">
					<a href="dashboard" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-house-door me-2"></i>Dashboard</span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 
					<?php 
					if(isset($sSlug) && (
						$sSlug == 'user' || $sSlug == 'add-user' || $sSlug == 'view-user'
					)){ print 'active'; } ?>
				">
					<a href="user" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-person me-2"></i>Users</span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 				
				<?php 
				if(isset($sSlug) && (
					$sSlug == 'setting' || $sSlug == 'general' 
				)){ print 'active'; } ?>
				">
					<a href="setting" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-gear me-2"></i>Settings</span>
					</a>
                </div>
			</div>
		</div>
		<div class="bg-white align-items-center py-2 px-3 border-top">
			<div class="text-center">
				<span class="text-body-secondary small">
					© 2024 <a class="text-primary" style="text-decoration:none;" href="https://www.batoi.com" target="_blank">Batoi</a>
				</span>
				<span class="text-muted small"><a href="https://www.batoi.com/about/legal" class="hvr-underline-from-left text-muted">Legal Policies</a></span>
			</div>
		</div>
    </div>
    
    <div class="w-100 px-0 overflow-hidden">
		<main class="sidebar-on">