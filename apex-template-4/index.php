<?php
$sSlug = !empty($_GET['Slug'])?$_GET['Slug']:'';//print_r($_GET);exit;

switch($sSlug)
{
    case 'home':
    $sPageTitle = 'Resurgent Odisha 2024 - Utkal Chamber of Commerce & Industry Limited';
    $sIncludeFile = 'home.php';
    break;

    default:
    $sPageTitle = 'Apex Template 4';
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