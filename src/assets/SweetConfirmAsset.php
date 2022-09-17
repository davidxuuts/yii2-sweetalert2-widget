<?php

namespace davidxu\sweetalert2\assets;

use yii\web\AssetBundle;

/**
 * Class SweetConfirmAsset
 * @package davidxu\sweetalert2\assets
 */
class SweetConfirmAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@davidxu/sweetalert2/';

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
        SweetAlert2Asset::class,
    ];
}
