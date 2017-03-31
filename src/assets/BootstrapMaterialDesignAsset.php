<?php
namespace verbi\yii2BootstrapMaterial\assets;
use yii\web\AssetBundle;


class BootstrapMaterialDesignAsset extends AssetBundle
{
        public $sourcePath = '@bower/bootstrap-material-design/dist';
        public $js = [
            'js/ripples.min.js',
            'js/material.min.js',
	];
        public $css = [
            'css/ripples.min.css',
            'css/bootstrap-material-design.css',
        ];
        public $depends = [
            'yii\web\JqueryAsset',
            'yii\bootstrap\BootstrapAsset',
        ];
}