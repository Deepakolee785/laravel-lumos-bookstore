<?php

namespace App\Repositories;

use App\Models\CollegeGroupBook;
use App\Repositories\BaseRepository;

/**
 * Class CollegeGroupBookRepository
 * @package App\Repositories
 * @version February 12, 2020, 6:01 am UTC
*/

class CollegeGroupBookRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'college_id',
        'group_id',
        'book_id'
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
        return CollegeGroupBook::class;
    }
}
