<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Group
 * @package App\Models
 * @version February 11, 2020, 3:06 am UTC
 *
 * @property string name
 * @property integer college_id
 */
class Group extends Model
{
    use SoftDeletes;

    public $table = 'groups';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'college_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'college_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'college_id' => 'required'
    ];

    
}
