<?php namespace Mystock\Stock;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Mystock\Stock\Components\ProductsNew' => 'ProductsNew',
            'Mystock\Stock\Components\ProductDetail' => 'ProductDetail',
            'Mystock\Stock\Components\ProductPricehight' => 'ProductPricehight',
            'Mystock\Stock\Components\ProductPhone' => 'ProductPhone',
            'Mystock\Stock\Components\ProductLaptop' => 'ProductLaptop',
            'Mystock\Stock\Components\ProductViewHight' => 'ProductViewHight',
        ];
    }

    public function registerSettings()
    {

    }
}
