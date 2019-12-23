<?php namespace Mystock\Stock\Components;

use Cms\Classes\ComponentBase;
use Mystock\Stock\Models\Product;

class ProductDetail extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'productDetail',
            'description' => 'xem chi tiết sản phẩm'
        ];
    }
    public $productdetail;
    public function onRun(){
        $slug = $this->param('slug');
        $this->productdetail = Product::where('slug',$slug)->first();
        $productviewplus = Product::where('slug',$slug)->update(['view_count'=> $this->productdetail->view_count + 1 ]);

    }
    public function defineProperties()
    {
        return [];
    }
}
