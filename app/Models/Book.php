<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Book
 * @package App\Models
 * @version February 11, 2020, 3:13 am UTC
 *
 * @property string title
 * @property string author
 * @property string publisher
 * @property string description
 * @property integer price
 */
class Book extends Model
{
    use SoftDeletes;

    public $table = 'books';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'edition',
        'publisher',
        'description',
        'price',
        'cover'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'edition' => 'string',
        'cover' => 'string',
        'publisher' => 'string',
        'description' => 'string',
        'price' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'edition' => 'required',
        'price' => 'required|min:0',
        'cover' => 'required',
    ];

    
}
