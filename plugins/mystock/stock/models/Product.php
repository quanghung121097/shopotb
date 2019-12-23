<?php namespace Mystock\Stock\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mystock_stock_products';

    /**
     * @var array Validation rules
     */
    public $attachMany = [
        'images' => 'System\Models\File',
    ];
    public $belongsTo = [
        'category' => 'Mystock\Stock\Models\Category',
        'table' =>'mystock_stock_categories'
    ];
    public $rules = [
        'name' => 'required|unique:mystock_stock_products,name',
        'slug' => 'required|unique:mystock_stock_products,slug',
        'sale_price' => 'required|numeric',
        'origin_price' => 'required|numeric',
        'content' => 'required',
        'quantity' => 'required|numeric',
    ];
    public $customMessages = [
        'required' => ':attribute không được để trống',
        'name.unique' => 'Tên danh mục đã tồn tại',
        'slug.unique' => 'Slug đã tồn tại',
        'numeric' => ':attribute phải là kiểu số',
    ];
}
