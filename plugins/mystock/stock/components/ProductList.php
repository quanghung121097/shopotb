<?php namespace Mystock\Stock\Components;
use Illuminate\Pagination\LengthAwarePaginator;
use Cms\Classes\ComponentBase;
use Mystock\Stock\Models\Product;
use Mystock\Stock\Models\Category;
class ProductList extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ProductList',
            'description' => 'Danh sách sản phẩm'
        ];
    }
    public $products,$category;
    public function onRun(){
        $slug=$this->param('slug');
        $this->category=Category::where('slug','=',$slug)->first();
        $cate=Category::select('id')->where('parent_id','=',$this->category->id)->get();
        $this->products=Product::whereIn('category_id',$cate)->orWhere('category_id',$this->category->id)->orderBy('created_at', 'desc')->paginate(10);

    }

    public function defineProperties()
    {
        return [
            // 'slug' => [
            //     'title'       => 'slug',
            //     'description' => 'slug_description',
            //     'default'     => '{{ :slug }}',
            //     'type'        => 'string',
            // ],
            // 'categoryPage' => [
            //     'title'       => 'categorypage',
            //     'description' => 'category_description',
            //     'type'        => 'dropdown',
            //     'default'     => 'blog/category',
            // ],
        ];
    }
}
