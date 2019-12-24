<?php namespace Mystock\Stock\Components;

use Cms\Classes\ComponentBase;
use Mystock\Stock\Models\Product;
class ProductPhone extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'productPhone',
            'description' => 'Danh mục điện thoại'
        ];
    }
    public $productPhone;
    public function onRun(){
        $this->productPhone = Product::where('category_id','1')->orderBy('created_at','desc')->where('quantity','>','0')->limit(3)->get();
    }
    public function defineProperties()
    {
        return [];
    }
}
