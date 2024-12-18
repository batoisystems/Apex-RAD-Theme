<?php
$sSlug = !empty($_GET['Slug'])?$_GET['Slug']:'';//print_r($_GET);exit;

switch($sSlug)
{
    case 'dashboard':
    $sPageTitle = 'Dashboard';
    $sIncludeFile = 'dashboard.php';
    break;

    case 'user':
    $sPageTitle = 'Users';
    $sIncludeFile = 'user.php';
    break;

    case 'add-user':
    $sPageTitle = 'Add User';
    $sIncludeFile = 'add-user.php';
    break;

    case 'view-user':
    $sPageTitle = 'View User';
    $sIncludeFile = 'view-user.php';
    break;

    case 'setting':
    $sPageTitle = 'Setting';
    $sIncludeFile = 'setting.php';
    break;

    case 'general':
    $sPageTitle = 'General';
    $sIncludeFile = 'general.php';
    break;

    default:
    $sPageTitle = 'App Theme';
    $sIncludeFile = 'toc.php';
    break;
}

if(!empty($sSlug))
{
    if($sSlug == 'blog-list' || $sSlug == 'add-blog' || $sSlug == 'subscription' || $sSlug == 'add-multiple-blog')
    {
        include 'header-blog.php';
        include $sIncludeFile;
        include 'footer.php';
    }
    else if($sSlug == 'blog-web' || $sSlug == 'individual-blog' || $sSlug == 'blog-web-2' || $sSlug == 'individual-blog-2')
    {
        include 'header-web.php';
        include $sIncludeFile;
        include 'footer.php';
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