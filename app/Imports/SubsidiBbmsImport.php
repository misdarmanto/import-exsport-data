<?php

namespace App\Imports;

use App\Models\SubsidiBbm;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SubsidiBbmsImport implements ToModel, WithHeadingRow
{


    public function model(array $row)
    {
        // dd($row);
        return new SubsidiBbm([
            'no' => $row['no'],
            'tanggal' => $row['tanggal'],
            'saldo' => $row['saldo'],
        ]);


        return null;
    }
}
