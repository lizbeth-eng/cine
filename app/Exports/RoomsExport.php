<?php

namespace App\Exports;

use App\Room;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class RoomsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $rooms= DB::table('rooms')->select('id','chairs','capacity')->get();
         return $rooms;
        
    }
    public function headings():array{
        return[
            'ID',
            'SILLAS',
            'CAPACIDAD',
            
        ];
        
    }
}
