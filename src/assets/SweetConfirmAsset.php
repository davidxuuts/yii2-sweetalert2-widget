<?php

namespace davidxu\sweetalert2\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Class SweetConfirmAsset
 * @package davidxu\sweetalert2\assets
 */
class SweetConfirmAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = __DIR__ . '/../';

    /**
     * @var array
     */
    public $css = [];

    /**
     * @var array
     */
    public $js = [
        'js/sweetconfirm.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        YiiAsset::class,
    ];
}
