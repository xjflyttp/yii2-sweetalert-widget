<?php

namespace xj\sweetalert\themes;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class TwitterAsset extends AssetBundle
{

    public $sourcePath = '@bower/sweetalert/themes/twitter';
    public $basePath = '@webroot/assets';
    public $css = ['twitter.css'];
    public $depends = ['xj\sweetalert\SweetalertAsset'];

}
