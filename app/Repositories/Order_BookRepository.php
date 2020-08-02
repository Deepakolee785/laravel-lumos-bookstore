<?php

namespace App\Repositories;

use App\Models\Order_Book;
use App\Repositories\BaseRepository;

/**
 * Class Order_BookRepository
 * @package App\Repositories
 * @version February 11, 2020, 3:28 am UTC
*/

class Order_BookRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order_id',
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
        return Order_Book::class;
    }
}
