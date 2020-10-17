<?php

namespace App\Imports;

use App\Term;
use Maatwebsite\Excel\Concerns\ToModel;

class TermsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Term([
            'name' => $row[0],
            'keyword' => ''
        ]);
    }
}
