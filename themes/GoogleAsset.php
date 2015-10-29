<?php

namespace xj\sweetalert\themes;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class GoogleAsset extends AssetBundle
{

    public $sourcePath = '@bower/sweetalert/themes/google';
    public $basePath = '@webroot/assets';
    public $css = ['google.css'];
    public $depends = ['xj\sweetalert\SweetalertAsset'];

}
