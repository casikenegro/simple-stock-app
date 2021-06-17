<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductMovement extends Model
{
    public $table = 'product_movements';

    public $fillable = [
        "product_id", 
        "movement",
        "quantity", 
        "retry_name",
        "document",
        "employee",
        "created_at", 
        "ot"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'movement' => 'string',
        'product_id' => 'number',
        'quantity' => 'number',
        'created_at'=>'date',
        "retry_name"=>'string',
        "document"=>'string',
        "employee"=>'string',
        "ot"

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'movement' => 'required',
        "quantity"=>'required',
        'product_id' => 'required',
        "retry_name"=>'required',
        "document"=>'required',
        "employee"=>'required',
        "ot"=>'required'

    ];

    protected $with = ['product'];


    public function product()
    {
        return $this->belongsTo("App\Models\Product");
    }
}
