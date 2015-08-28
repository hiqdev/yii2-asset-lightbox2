<?php

namespace hiqdev\assets\lightbox2;

class LightboxAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/lightbox2';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/lightbox.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/lightbox.css'
    ];

}
