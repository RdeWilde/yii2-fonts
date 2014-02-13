<?php

namespace sheillendra\fonts\assets;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
	public $sourcePath = '@vendor/fortawesome/font-awesome/src/3.2.1/assets/font-awesome';
	public $css = [];
	public $js = [];
	public $depends = [];

	public function init() {
		$this->css = YII_DEBUG ? ['css/font-awesome.css'] : ['css/font-awesome.min.css'];
		parent::init();
	}
}
