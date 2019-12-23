<?php namespace Mystock\Stock\Components;

use Cms\Classes\ComponentBase;
use Mystock\Stock\Models\Product;
class ProductsNew extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'productsNew ',
            'description' => 'Danh sách sản phẩm mới'
        ];
    }
    public $productsnew;
    public function onRun(){
        $this->productsnew = Product::orderBy('created_at','desc')->where('quantity','>','0')->limit(5)->get();
    }
    public function defineProperties()
    {
        return [];
    }
}
