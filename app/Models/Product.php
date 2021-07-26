<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Product extends Model
{

    use Sortable;
    public $table = 'products';
    

    public $fillable = [
        "code", 
        "unit",
        "description", 
        "min_stock",
        "max_stock",
        "point_order", 
        "value",
        "current_stock"
    ];
    public $sortable = ['code', 'unit', 'description','min_stock', 'max_stock', 'value','current_stock','point_order'];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'code' => 'string',
        "unit"=>'string',
        'description' => 'text',
        'min_stock' => 'number',
        'max_stock' => 'number',
        'point_order' => 'number',
        'value' => 'number',
        'current_stock'=>"number",
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'code' => 'required',
        "unit"=>'required',
        'description' => 'required',
        'min_stock' => 'required',
        'max_stock' => 'required',
        'point_order' => 'required',
        'value' => 'required',
        'current_stock'=>"required"
    ];

    public function movements()
    {
        return $this->hasMany("App\Models\ProductMovement");
    }
}
