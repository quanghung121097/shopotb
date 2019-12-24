<?php namespace Mystock\Stock;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Mystock\Stock\Components\CategoryList' => 'CategoryList',
            'Mystock\Stock\Components\ProductList' => 'ProductList',
            'Mystock\Stock\Components\ProductsNew' => 'ProductsNew',
            'Mystock\Stock\Components\ProductDetail' => 'ProductDetail',
            'Mystock\Stock\Components\ProductPricehight' => 'ProductPricehight',
            'Mystock\Stock\Components\ProductPhone' => 'ProductPhone',
            'Mystock\Stock\Components\ProductLaptop' => 'ProductLaptop',
            'Mystock\Stock\Components\ProductViewHight' => 'ProductViewHight',
            'Mystock\Stock\Components\Comment' =>'Comment',
        ];
    }

    public function registerSettings()
    {

    }
}
