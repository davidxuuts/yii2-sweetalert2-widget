<?php

namespace davidxu\sweetalert2\assets;

use yii\web\AssetBundle;

/**
 * Class AnimateCssAsset
 * @package davidxu\sweetalert2\assets
 */
class AnimateCssAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@npm/animate.css';

    /**
     * @var array
     */
    public $css = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $min = YII_ENV_DEV ? '' : '.compact';
        $this->css[] = 'animate' . $min . '.css';
    }

    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
