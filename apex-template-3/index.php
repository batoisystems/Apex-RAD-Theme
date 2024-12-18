<?php
$sSlug = !empty($_GET['Slug'])?$_GET['Slug']:'';//print_r($_GET);exit;

switch($sSlug)
{
    case 'home':
    $sPageTitle = 'Home';
    $sIncludeFile = 'home.php';
    break;

    case 'about':
    $sPageTitle = 'About';
    $sIncludeFile = 'about.php';
    break;

    case 'event':
    $sPageTitle = 'Events';
    $sIncludeFile = 'event.php';
    break;

    case 'individual-event':
    $sPageTitle = 'Spoke on DevSecOps and Platform Engineering at Utkal University';
    $sIncludeFile = 'individual-event.php';
    break;

    case 'jobs':
    $sPageTitle = 'Jobs';
    $sIncludeFile = 'job.php';
    break;

    case 'job-position':
    $sPageTitle = 'Job Position';
    $sIncludeFile = 'job-position.php';
    break;

    case 'individual-job':
    $sPageTitle = 'Individual Job';
    $sIncludeFile = 'individual-job.php';
    break;

    case 'employers':
    $sPageTitle = 'Employers';
    $sIncludeFile = 'employers.php';
    break;

    case 'individual-employer':
    $sPageTitle = 'Individual Employer';
    $sIncludeFile = 'individual-employer.php';
    break;

    case 'blog':
    $sPageTitle = 'Blog';
    $sIncludeFile = 'blog.php';
    break;

    case 'individual-blog':
    $sPageTitle = 'Individual Blog';
    $sIncludeFile = 'individual-blog.php';
    break;

    case 'contact':
    $sPageTitle = 'Contact';
    $sIncludeFile = 'contact.php';
    break;

    default:
    $sPageTitle = 'Apex Theme 3';
    $sIncludeFile = 'toc.php';
    break;
}

if(!empty($sSlug))
{
    include 'header.php';
    include $sIncludeFile;
    include 'footer.php';
}
else
{
    include $sIncludeFile;
}
?>