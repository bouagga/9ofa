<?php

namespace App\Imports;

use App\Person;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;

class PersonsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Person([
            'name'     => $row[0],
            'city'    => $row[1],
            'building'  => $row[2],
            'dor'    => $row[3],
            'phone'    => $row[4],
            'case'    => $row[5],
            'work'    => $row[6],
            'number_famly'    => $row[7],
            'id_user' => Auth::user()->id,
        ]);
    }
}
