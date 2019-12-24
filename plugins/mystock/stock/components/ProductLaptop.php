<?php namespace Mystock\Stock\Components;

use Cms\Classes\ComponentBase;
use Mystock\Stock\Models\Product;

class ProductLaptop extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'productLaptop',
            'description' => 'Danh mục máy tính'
        ];
    }
    public $productLaptop;
    public function onRun(){
        $this->productLaptop = Product::where('category_id','3')->limit(3)->get();
    }
    public function defineProperties()
    {
        return [];
    }
}
