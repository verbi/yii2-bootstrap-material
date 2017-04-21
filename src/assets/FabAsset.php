<?php
namespace verbi\yii2BootstrapMaterial\assets;
use yii\web\AssetBundle;

class FabAsset extends AssetBundle
{
        public $sourcePath = '@vendor/verbi/yii2-bootstrap-material/src/assets/fabAssets';
        public $js = [
//            'js/fab.js',
	];
        public $css = [
            'css/fab.css',
            'https://fonts.googleapis.com/icon?family=Material+Icons',
        ];
        public $depends = [
            'yii\bootstrap\BootstrapAsset',
        ];
}