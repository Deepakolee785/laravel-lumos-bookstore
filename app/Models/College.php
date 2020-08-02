<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class College
 * @package App\Models
 * @version February 11, 2020, 2:58 am UTC
 *
 * @property string name
 */
class College extends Model
{
    use SoftDeletes;

    public $table = 'colleges';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|unique:colleges'
    ];

    
}
