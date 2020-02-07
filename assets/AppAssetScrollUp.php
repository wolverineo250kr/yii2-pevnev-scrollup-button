<?php

namespace wolverineo250kr\widgets\scrollup\assets;

use Yii;
use yii\web\AssetBundle;

class AppAssetScrollUp extends AssetBundle {

    public $publishOptions = [
        'forceCopy' => true,
    ];
    public $sourcePath = __DIR__;
    public $css = [
        'css/scrollUp' . ((YII_DEBUG) ? '' : '.min') . '.css?v1.00',
    ];
    public $js = [
        "js/scrollUp" . ((YII_DEBUG) ? '' : '.min') . ".js?v1.00",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
