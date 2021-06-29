<?php

namespace App\Exports;

use App\Models\Home;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class UserExport implements FromCollection
{
    /**
    * return \Illuminate\Support\Collection
    */
    use Exportable;
    public function collection()
    {
        return Home::all();
    }
}
