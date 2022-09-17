<?php

namespace davidxu\sweetalert2\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class SweetAlert2Asset
 * @package davidxu\sweetalert2\assets;
 */
class SweetAlert2Asset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@npm/sweetalert2/dist';

    /**
     * @var array
     */
    public $js = [];
    public $css = [
        'sweetalert2.css',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $min = YII_ENV_DEV ? '' : '.min';
        $this->js[] = 'sweetalert2.all' . $min . '.js';
    }

    /**
     * @var array
     */
    public $depends = [
        JqueryAsset::class,
    ];
}
