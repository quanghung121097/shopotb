<?php namespace Mystock\Stock\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\NestedTree;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mystock_stock_categories';

    /**
     * @var array Validation rules
     */
    public $belongsTo = [
        'category' => 'Mystock\Stock\Models\Category',
    ];
    public $attachOne = [
        'thumbnail' => 'System\Models\File',
    ];
    public $rules = [
        'name' => 'required|unique:mystock_stock_categories,name',
        'slug' => 'required|unique:mystock_stock_categories,slug',
        'description' => 'required|min:3',
    ];
    public $customMessages = [
        'required' => ':attribute không được để trống',
        'name.unique' => 'Tên danh mục đã tồn tại',
        'slug.unique' => 'Slug đã tồn tại',
        'description.min' => ':attribute không được nhỏ hơn :min'
    ];
}
