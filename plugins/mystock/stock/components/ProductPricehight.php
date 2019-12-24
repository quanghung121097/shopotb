<?php namespace Mystock\Stock\Components;

use Cms\Classes\ComponentBase;
use Mystock\Stock\Models\Product;
class ProductPricehight extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'productPricehight',
            'description' => 'Sản phẩm có giá cao nhất'
        ];
    }
    public $productPricehight;
    public function onRun(){
        $this->productPricehight = Product::Max('origin_price')->where('quantity','>','0')->first();
    }
    public function defineProperties()
    {
        return [];
    }
}
