<?php namespace Mystock\Stock\Models;

use Model;


/**
 * Model
 */
class Comment extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'mystock_stock_comment';

    /**
     * @var array Validation rules
     */

    public $rules = [
    ];

}
