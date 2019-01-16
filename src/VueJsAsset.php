<?php
/**
 * @copyright Copyright (c) 2019 Carsten Brandt
 * @license https://github.com/cebe/yii2-vuejs/blob/master/LICENSE
 * @link https://github.com/cebe/yii2-vuejs#readme
 */

namespace cebe\yii2vuejs;

use yii\web\AssetBundle;

/**
 * vue.js asset bundle for Yii 2
 */
class VueJsAsset extends AssetBundle
{
    /**
     * @var bool set this to true to load only the vue.js runtime library.
     * @see https://github.com/vuejs/vue/blob/dev/dist/README.md#runtime--compiler-vs-runtime-only
     */
    public $runtimeOnly = false;

    public $sourcePath = '@bower/vue/dist';
    public $js = [];


    public function init()
    {
        $fileName = $this->runtimeOnly ? 'vue.runtime' : 'vue';
        if (YII_DEBUG) {
            $this->js[] = "$fileName.js";
        } else {
            $this->js[] = "$fileName.min.js";
        }
    }
}
