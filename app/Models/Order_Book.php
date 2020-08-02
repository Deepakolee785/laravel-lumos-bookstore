<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order_Book
 * @package App\Models
 * @version February 11, 2020, 3:28 am UTC
 *
 * @property integer order_id
 * @property integer book_id
 */
class Order_Book extends Model
{
    use SoftDeletes;

    public $table = 'order_book';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'order_id',
        'book_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'book_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order_id' => 'required',
        'book_id' => 'required'
    ];

    
}
