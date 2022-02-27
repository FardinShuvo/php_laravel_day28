<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $student;

    public function newStudent()
    {
        $this->student          = new Student();
        $this->student->name    = 'Shuvo';
        $this->student->email   = 'fardin@gmail.com';
        $this->student->mobile  = '28756';
        $this->student->save();
    }

    public static function getAllStudent()
    {
        return [
          0=>[
              'id' => 1,
              'name' => 'Fardin',
              'email' => 'fardin@gmail.com',
              'mobile' => '01942566984',
              'image' => ''
          ],
            1=>[
                'id' => 2,
                'name' => 'Shuvo',
                'email' => 'Shuv0@gmail.com',
                'mobile' => '01942566985',
                'image' => ''
            ],
        ];
    }
}
