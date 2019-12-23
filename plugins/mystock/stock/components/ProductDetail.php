<?php namespace Mystock\Stock\Components;

use Cms\Classes\ComponentBase;
use Mystock\Stock\Models\Product;

class ProductDetail extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ProductDetail',
            'description' => 'Chi tiết sản phẩm.'
        ];
    }
    public $product;
    public function onRun(){
        $slug=$this->param('slug');
        $this->product=product::where('slug',$slug)->orderBy('updated_at','desc')->first();

    }
    public function defineProperties()
    {
        return [];
    }

}
