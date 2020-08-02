<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CollegeGroupBook
 * @package App\Models
 * @version February 12, 2020, 6:01 am UTC
 *
 * @property integer college_id
 * @property integer group_id
 * @property integer book_id
 */
class CollegeGroupBook extends Model
{
    use SoftDeletes;

    public $table = 'college_group_books';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'college_id',
        'group_id',
        'book_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'college_id' => 'integer',
        'group_id' => 'integer',
        'book_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'college_id' => 'required',
        'group_id' => 'required',
        'book_id' => 'required'
    ];

    
}
