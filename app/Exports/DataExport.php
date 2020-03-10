<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use File;
class DataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      $path = storage_path().'/json/palawan-m.json';
      $get_data = File::get($path);
      $data = collect(json_decode($get_data,true));

      return $data;
    }
}
