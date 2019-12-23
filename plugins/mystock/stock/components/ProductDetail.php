<?php namespace Mystock\Stock\Components;

use Cms\Classes\ComponentBase;
use Mystock\Stock\Models\Product;

class product extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'product',
            'description' => 'xem chi tiết sản phẩm',
        ];
    }
    public $product;
    public function onRun(){
        $slug = $this->param('slug');
        $this->product = Product::where('slug',$slug)->first();
        $productviewplus = Product::where('slug',$slug)->update(['view_count'=> $this->product->view_count + 1 ]);

    }
    public function defineProperties()
    {
        return [];
    }
}
