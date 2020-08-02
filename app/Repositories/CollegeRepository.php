<?php

namespace App\Repositories;

use App\Models\College;
use App\Repositories\BaseRepository;

/**
 * Class CollegeRepository
 * @package App\Repositories
 * @version February 11, 2020, 2:58 am UTC
*/

class CollegeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return College::class;
    }
}
