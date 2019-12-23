<?php namespace Mystock\Stock;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Mystock\Stock\Components\CategoryList'=>'CategoryList',
    		'Mystock\Stock\Components\ProductList'=>'ProductList',
            'Mystock\Stock\Components\ProductDetail'=>'ProductDetail'
    	];
    }

    public function registerSettings()
    {
    }
}
