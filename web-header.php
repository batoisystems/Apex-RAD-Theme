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
    <link rel="stylesheet" href="../cloudspace/pub/css/app.css">
	<!-- <link rel="stylesheet" href="apex.css"> -->

	<!-- Include the latest jstree CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.12/themes/default/style.min.css" rel="stylesheet" />

	<!-- Animate -->
    <link rel="stylesheet" href="https://www.batoi.com/pub/css/animate.min.css">
    <link rel="stylesheet" href="https://www.ashwinirath.com/pub/css/animate.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
	<style>
		.apex-sidebar{
			height: calc(100% - 38px) !important;
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
		<div>
			<a class="navbar-brand" href="dashboard">
				<span class="h3"><span class="text-primary">ApexWeb</span><span class="text-secondary"> Elements</span> </span>
			</a>
		</div>
	</nav>
    
	<div id="sidebar" class="pt-0">
		<div id="sidebar-content" class="apex-sidebar">
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="web-accordion") {echo "active"; }?>">
					<a href="#" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-chevron-down me-2"></i> Accordion </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="web-card") {echo "active"; }?>">
					<a href="web-card" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-card-text me-2"></i> Card </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="web-carousels") {echo "active"; }?>">
					<a href="#" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-three-dots me-2"></i> Carousels </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="web") {echo "active"; }?>">
					<a href="#" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-telephone me-2"></i> Contact Page </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="web-counters") {echo "active"; }?>">
					<a href="web-counters" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-sort-numeric-down me-2"></i> Counters </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="web") {echo "active"; }?>">
					<a href="#" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-dash-lg me-2"></i> Dividers </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="web") {echo "active"; }?>">
					<a href="#" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-bar-chart-line me-2"></i> Graph </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="web-banner") {echo "active"; }?>">
					<a href="web-banner" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-image me-2"></i> Hero Section </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="web") {echo "active"; }?>">
					<a href="#" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-list-ul me-2"></i> List </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="web") {echo "active"; }?>">
					<a href="#" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-map me-2"></i> Maps </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="web-pricing-table") {echo "active"; }?>">
					<a href="web-pricing-table" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-currency-dollar me-2"></i> Pricing Tables </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="web") {echo "active"; }?>">
					<a href="#" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-share me-2"></i> Social Icons </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="web") {echo "active"; }?>">
					<a href="#" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-person-vcard me-2"></i> Team </span>
					</a>
                </div>
			</div>
			<div class="card border-0 bg-transparent shadow-none">
                <div class="sidebar-item sidebar-accordion text-dark border-bottom p-3 <?php if (isset($sSlug) && $sSlug =="web-testimonial") {echo "active"; }?>">
					<a href="web-testimonial" class="sidebar-link ps-0">
						<span class="sidebar-text"><i class="bi bi-chat-dots me-2"></i> Testimonial </span>
					</a>
                </div>
			</div>
		</div>
    </div>
   
    <div class="w-100 px-0 overflow-hidden">
		<main class="sidebar-on">