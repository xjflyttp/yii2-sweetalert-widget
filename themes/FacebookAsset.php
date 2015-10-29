<?php

namespace xj\sweetalert\themes;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class FacebookAsset extends AssetBundle
{

    public $sourcePath = '@bower/sweetalert/themes/facebook';
    public $basePath = '@webroot/assets';
    public $css = ['facebook.css'];
    public $depends = ['xj\sweetalert\SweetalertAsset'];

}
