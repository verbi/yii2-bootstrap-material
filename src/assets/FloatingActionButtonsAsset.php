<?php
namespace verbi\yii2BootstrapMaterial\assets;
use yii\web\AssetBundle;

class FloatingActionButtonsAsset extends AssetBundle
{
        public $sourcePath = '@vendor/verbi/yii2-bootstrap-material/src/assets/floatingActionButtonsAssets';
        public $js = [
            'js/fab.js',
//            'js/simple-fab.js',
	];
        public $css = [
            'css/fab.css',
        ];
        public $depends = [
            'yii\web\JqueryAsset',
            'yii\bootstrap\BootstrapAsset',
        ];
}