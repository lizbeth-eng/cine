<?php

namespace App\Exports;

use App\Funtion;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class FuntionsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()

    {
        $funtions= DB::table('funtions')->select('id','start','available','end')->get();
         return $funtions;
    }
    public function headings():array{
        return[
            'ID',
            'COMIENZO',
            'DISPONIBLE',
            'FINAL'
        ];
    
    }
}
