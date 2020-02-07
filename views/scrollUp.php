<?

use wolverineo250kr\widgets\scrollup\assets\AppAssetScrollUp;

AppAssetScrollUp::register($this);
?>

<div class='button-up' style='display: none;'>
    <? if ($faIcon): ?>
        <i class="fa <?= $faIcon ?> fa-1x" aria-hidden="true"></i>
    <? else: ?>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1664 1280"><path d="M1619 1075l-166 165q-19 19-45 19t-45-19L832 709l-531 531q-19 19-45 19t-45-19L45 1075q-19-19-19-45.5T45 984l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z" fill="#fff"/></svg>
        <? endif; ?> 
</div>

<?
$borderRadius = ($form == 'round') ? '50%' : '0px';
$isSmooth = ($smooth) ? 'transition: .3s;' : '';
$css = <<< CSS

    .button-up{
        background-color: {$color};
         border-radius: {$borderRadius};
         $isSmooth
    }

    .button-up:hover{
        background-color: {$colorHover};
    }

    .button-up:focus{
        color: {$color};
    }
       
CSS;
$this->registerCss($css);
?>
