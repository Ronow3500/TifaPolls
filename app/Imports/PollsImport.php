<?php

namespace App\Imports;

use App\Models\Poll;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PollsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        return new Poll([
            'Sno'            => $row['sno'],
            'Agex'           => $row['agex'],
            'Gender'         => $row['gender'],
            'Setting'        => $row['setting'],
            'Region'         => $row['region'],
            'PPA'            => $row['ppa'],
            'Pref_President' => $row['pref_president'],
            'Weight'         => $row['weight'],
            'Wave'           => $row['wave']
        ]);
    }
}
