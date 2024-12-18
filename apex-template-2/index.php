<?php
$sSlug = !empty($_GET['Slug'])?$_GET['Slug']:'';//print_r($_GET);exit;

switch($sSlug)
{
    case 'home':
    $sPageTitle = 'Home';
    $sIncludeFile = 'home.php';
    break;

    case 'home-2':
    $sPageTitle = 'Home';
    $sIncludeFile = 'home-2.php';
    break;
    
    case 'about':
    $sPageTitle = 'About Us';
    $sIncludeFile = 'about.php';
    break;

    case 'services':
    $sPageTitle = 'Services';
    $sIncludeFile = 'services.php';
    break;

    case 'cases':
    $sPageTitle = 'Cases';
    $sIncludeFile = 'cases.php';
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
    $sPageTitle = 'Batoi Partners with C V Raman Global University';
    $sIncludeFile = 'individual-blog.php';
    break;

    case 'contact':
    $sPageTitle = 'Contact Us';
    $sIncludeFile = 'contact.php';
    break;

    default:
    $sPageTitle = 'Apex Template 1';
    $sIncludeFile = 'toc.php';
    break;
}

if(!empty($sSlug))
{
    if($sSlug == 'home-2')
    {
        include $sIncludeFile;
    }
    else
    {
        include 'header.php';
        include $sIncludeFile;
        include 'footer.php';
    }
}
else
{
    include $sIncludeFile;
}
?>