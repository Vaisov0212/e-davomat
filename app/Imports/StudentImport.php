<?php

namespace App\Imports;
use App\Models\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class StudentImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row){
            // dd($rows);
            Student::create([
            'card_id'=>$row[0],
            'studentFish'=>$row[1],
            'st_sana'=>$row[2],
            'studentGroup'=>$row[3],
            'genderType'=>$row[4],
            ]);
        }

    }
}
