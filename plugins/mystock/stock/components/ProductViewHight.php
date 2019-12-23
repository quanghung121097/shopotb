<?php namespace Mystock\Stock\Components;

use Cms\Classes\ComponentBase;
use Mystock\Stock\Models\Product;
class ProductViewHight extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'productViewHight',
            'description' => 'Sản phẩm có lượt xem cao nhất'
        ];
    }
    public $productPricehight;
    public function onRun(){
        $this->productPricehight = Product::OrderBy('view_count','Desc')->where('quantity','>','0')->limit(10)->get();
    }
    public function defineProperties()
    {
        return [];
    }
}
