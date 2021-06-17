<?php

namespace App\Repositories;

use App\Models\ProductMovement;
use App\Repositories\BaseRepository;

/**
 * Class ProductRepository
 * @package App\Repositories
 * @version November 6, 2020, 4:04 am UTC
*/

class ProductMovementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        "product_id", 
        "movement",
        "quantity",
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
        return ProductMovement::class;
    }
}
