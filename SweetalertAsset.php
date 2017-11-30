<?php

namespace xj\sweetalert;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class SweetalertAsset extends AssetBundle
{

    public $sourcePath = '@bower/sweetalert/dist';
    public $js = ['sweetalert-dev.js'];
    public $css = ['sweetalert.css'];
    public $depends = ['yii\web\JqueryAsset'];

}
