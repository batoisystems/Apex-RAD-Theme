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

    case 'services':
    $sPageTitle = 'Services';
    $sIncludeFile = 'services.php';
    break;

    case 'individual-service':
    $sPageTitle = 'Cloud and Infrastructure Management';
    $sIncludeFile = 'individual-service.php';
    break;

    case 'team':
    $sPageTitle = 'Team';
    $sIncludeFile = 'team.php';
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
    $sPageTitle = 'Apex Template 1';
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