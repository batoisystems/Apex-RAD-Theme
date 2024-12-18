<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApexTheme</title>

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
	<!-- <link rel="stylesheet" href="https://www.batoi.com/pub/css/app.min.css?v=64816510b67ef"> -->

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/app.css">
	<!-- <link rel="stylesheet" href="apex.css"> -->

	<!-- Include the latest jstree CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.12/themes/default/style.min.css" rel="stylesheet" />

	<!-- Animate -->
	<link rel="stylesheet" href="https://www.batoi.com/pub/css/animate.min.css">
	<link rel="stylesheet" href="https://www.ashwinirath.com/pub/css/animate.min.css">
</head>
<body>
    
<div class="wrapper">
    <nav class="navbar navbar-expand navbar-theme sticky-top w-100">
        <div>
			<a href="#" class="sidebar-toggle text-center text-secondary" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
				<i class="bi bi-justify mx-auto"></i>
			</a>
		</div>
		<div>
			<a class="navbar-brand" href="dashboard">
				<span class="h3"><span class="text-primary">Apex</span><span class="text-secondary">Theme</span> </span>
			</a>
		</div>
	</nav>
    
	<div id="sidebar" class="pt-0">
		<div id="sidebar-content" class="no-img-sidebar">
			<div class="card border-0 bg-transparent shadow-none">
                <a class="sidebar-accordion filter-accordion-btn text-dark w-100 text-start text-decoration-none border-bottom p-3" type="button" data-bs-toggle="collapse" data-bs-target="#forms" aria-expanded="true" aria-controls="forms">
                    <span>
                        <i class="bi bi-file-earmark-text me-2"></i> Forms 
                        <span class="float-end">
                            <i class="bi bi-chevron-down filter-accordion-icon"></i>
						</span>
                    </span>
                </a>
                <div id="forms" class="collapse show" aria-labelledby="private" data-bs-parent="#sidebar-collapse-accordion">
 					<div class="card-body p-0">
 						<ul class="sidebar-nav ps-0 mb-0">
							<li class="sidebar-item p-3 <?php if (isset($sSlug) && $sSlug =="form-control") {echo "active"; }?>">
 								<a class="sidebar-link" href="form-control">
 									<span class="align-middle sidebar-text">Form Control </span>
 								</a>
 							</li>
							<li class="sidebar-item p-3 <?php if (isset($sSlug) && $sSlug =="select") {echo "active"; }?>">
 								<a class="sidebar-link" href="select">
 									<span class="align-middle sidebar-text">Select</span>
 								</a>
 							</li>
                            <li class="sidebar-item p-3 <?php if (isset($sSlug) && $sSlug =="switch") {echo "active"; }?>">
 								<a class="sidebar-link" href="switch">
 									<span class="align-middle sidebar-text">Switch</span>
 								</a>
 							</li>
                            <li class="sidebar-item p-3 <?php if (isset($sSlug) && $sSlug =="editor") {echo "active"; }?>">
 								<a class="sidebar-link" href="editor">
 									<span class="align-middle sidebar-text">Editor</span>
 								</a>
 							</li>
                            <li class="sidebar-item p-3 <?php if (isset($sSlug) && $sSlug =="file-uploader") {echo "active"; }?>">
 								<a class="sidebar-link" href="file-uploader">
 									<span class="align-middle sidebar-text">File Uploader</span>
 								</a>
 							</li>
                        </ul>
					</div>
				</div> 
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="table") {echo "active"; }?>">
					<a href="table" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-table me-2"></i> Table </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="cards") {echo "active"; }?>">
					<a href="cards" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-card-text me-2"></i> Card </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if(isset($sSlug) && $sSlug == 'breadcrumb'){ print 'active'; } ?>">
					<a href="breadcrumb" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-arrow-left-right me-2"></i> Breadcrumb </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <a class="sidebar-accordion filter-accordion-btn text-dark w-100 text-start text-decoration-none border-bottom p-3" type="button" data-bs-toggle="collapse" data-bs-target="#tabs" aria-expanded="true" aria-controls="tabs">
                    <span>
                        <i class="bi bi-files me-2"></i> Tabs 
                        <span class="float-end">
                            <i class="bi bi-chevron-down filter-accordion-icon"></i>
						</span>
                    </span>
                </a>
                <div id="tabs" class="collapse show" aria-labelledby="private" data-bs-parent="#sidebar-collapse-accordion">
 					<div class="card-body p-0">
 						<ul class="sidebar-nav ps-0 mb-0">
							<li class="sidebar-item p-3 <?php if (isset($sSlug) && $sSlug =="horizontal-tab") {echo "active"; }?>">
 								<a class="sidebar-link" href="horizontal-tab">
 									<span class="align-middle sidebar-text">Horizontal Tab </span>
 								</a>
 							</li>
							<li class="sidebar-item p-3 <?php if (isset($sSlug) && $sSlug =="vertical-tab") {echo "active"; }?>">
 								<a class="sidebar-link" href="vertical-tab">
 									<span class="align-middle sidebar-text"> Vertical Tab</span>
 								</a>
 							</li>
                        </ul>
					</div>
				</div> 
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="button") {echo "active"; }?>">
					<a href="button" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-menu-button me-2"></i> Button </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="banner") {echo "active"; }?>">
					<a href="banner" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-image me-2"></i> Banner </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="slider") {echo "active"; }?>">
					<a href="slider" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-sliders me-2"></i> Slider </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="timeline") {echo "active"; }?>">
					<a href="timeline" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-clock me-2"></i> Timeline </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="status") {echo "active"; }?>">
					<a href="status" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-clock me-2"></i> Status </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="jstree") {echo "active"; }?>">
					<a href="jstree" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-signpost-2 me-2"></i> Jstree</span>
					</a>
                </div>
			</div>
		</div>
		<div class="bg-white border-top pb-2">
			<div class="mt-2 text-center">
				<div class="d-flex justify-content-center">
				<!-- copyright text -->
				<small class="copyright-text">Copyright © 2024 <a href="https://www.batoi.com/">Batoi.</a></small>
				<!-- copyright links-->
				</div>
			</div>
		</div>
    </div>
   
    <div class="w-100 px-0 overflow-hidden">
		<main class="sidebar-on">