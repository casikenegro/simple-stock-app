<?php

namespace App\Exports;

use App\ProductMovement;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductMovementsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

        
    public function __construct($query)
    {
        $this->query = $query;
    }


    public function view(): View
    {
        return view('exports.productMovements', [
            'productMovements' => $this->query->get()
        ]);
    }
}
