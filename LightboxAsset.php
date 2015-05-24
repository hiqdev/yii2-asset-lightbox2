<?php
/**
 * @link      http://hiqdev.com/yii2-asset-lightbox2
 * @license   BSD 3-clause
 * @copyright Copyright (c) 2015 HiQDev
 */

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
        '/js/lightbox.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/lightbox.css'
    ];

}
