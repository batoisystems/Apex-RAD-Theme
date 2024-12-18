<?php
$sSlug = !empty($_GET['Slug'])?$_GET['Slug']:'';//print_r($_GET);exit;

switch($sSlug)
{
    case 'form-control':
    $sPageTitle = 'form-control';
    $sIncludeFile = 'form-control.php';
    break;

    case 'select':
    $sPageTitle = 'select';
    $sIncludeFile = 'select.php';
    break;

    case 'switch':
    $sPageTitle = 'switch';
    $sIncludeFile = 'switch.php';
    break;

    case 'editor':
    $sPageTitle = 'editor';
    $sIncludeFile = 'editor.php';
    break;

    case 'file-uploader':
    $sPageTitle = 'file-uploader';
    $sIncludeFile = 'file-uploader.php';
    break;

    case 'table':
    $sPageTitle = 'table';
    $sIncludeFile = 'table-2.php';
    break;

    case 'cards':
    $sPageTitle = 'cards';
    $sIncludeFile = 'card-2.php';
    break;

    case 'breadcrumb':
    $sPageTitle = 'breadcrumb';
    $sIncludeFile = 'breadcrumb-2.php';
    break;

    case 'horizontal-tab':
    $sPageTitle = 'horizontal-tab';
    $sIncludeFile = 'horizontal-tab-2.php';
    break;

    case 'vertical-tab':
    $sPageTitle = 'vertical-tab';
    $sIncludeFile = 'vertical-tab-2.php';
    break;

    case 'button':
    $sPageTitle = 'button';
    $sIncludeFile = 'button-2.php';
    break;

    case 'banner':
    $sPageTitle = 'banner';
    $sIncludeFile = 'banner-2.php';
    break;

    case 'slider':
    $sPageTitle = 'slider';
    $sIncludeFile = 'slider-2.php';
    break;

    case 'timeline':
    $sPageTitle = 'timeline';
    $sIncludeFile = 'timeline-2.php';
    break;

    case 'status':
    $sPageTitle = 'Status';
    $sIncludeFile = 'status.php';
    break;

    case 'jstree':
    $sPageTitle = 'jsTree';
    $sIncludeFile = 'jstree.php';
    break;

    case 'toc-2':
    $sPageTitle = 'Apex Theme';
    $sIncludeFile = 'toc-2.php';
    break;

    case 'web-banner':
    $sPageTitle = 'web-banner';
    $sIncludeFile = 'web-banner.php';
    break;

    case 'web-card':
    $sPageTitle = 'web-card';
    $sIncludeFile = 'web-card.php';
    break;

    case 'web-counters':
    $sPageTitle = 'web-counters';
    $sIncludeFile = 'web-counters.php';
    break;

    case 'web-carousels':
    $sPageTitle = 'web-carousels';
    $sIncludeFile = 'web-carousels.php';
    break;

    case 'web-pricing-table':
    $sPageTitle = 'web-pricing-table';
    $sIncludeFile = 'web-pricing-table.php';
    break;

    case 'web-testimonial':
    $sPageTitle = 'web-testimonial';
    $sIncludeFile = 'web-testimonial.php';
    break;

    default:
    $sPageTitle = 'Apex Theme';
    $sIncludeFile = 'toc.php';
    break;    
}

if(!empty($sSlug))
{
    if($sSlug == 'web-banner' || $sSlug == 'web-testimonial' || $sSlug == 'web-counters' || $sSlug == 'web-carousels' || $sSlug == 'web-pricing-table' || $sSlug == 'web-card')
    {
        include 'web-header.php';
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