<?php

namespace App\Exports;

use App\Products;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductsExport implements FromView
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
        return view('exports.products', [
            'products' => $this->query->get()
        ]);
    }
}


