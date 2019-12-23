<?php namespace Mystock\Stock\Components;

use Cms\Classes\ComponentBase;
use Mystock\Stock\Models\Category;

class CategoryList extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'CategoryList',
            'description' => 'Danh sách danh mục'
        ];
    }
    public $categories;

    public function onRun(){
        $sort= $this->property('sort');
        $sort=explode(' ', $sort);
        $this->categories = Category::orderBy($sort[0],$sort[1])->get();
    }

    public function defineProperties()
    {
        return [
            'sort' => [
                'title'=>'order By',
                'type' =>'dropdown'

            ]
        ];
    }
    public function getsortOptions(){
        return [
            'name asc' => 'Name Asc',
            'name desc'=> 'Name Desc'
        ];
    }
}
