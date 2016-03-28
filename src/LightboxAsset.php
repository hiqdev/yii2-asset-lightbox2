<?php

/*
 * Yii 2 asset for bower LightBox2
 *
 * @link      https://github.com/hiqdev/yii2-asset-lightbox2
 * @package   yii2-asset-lightbox2
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hiqdev\assets\lightbox2;

class LightboxAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/lightbox2';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'js/lightbox.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $css = [
        'css/lightbox.css',
    ];
}
