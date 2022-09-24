<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
public function Show()
{
$students = Students::all();
return $students;
}

public function delete($name)
{
    Students::where('name',$name)->delete();
    return "Student deleted successfuly";
}

public function store(Request $request)
{
    Students::create([ 

        'name'=> $request->name,
        'adress'=> $request->adress,
        'gender'=> $request->gender,
        'verified'=> $request->verified,
        'phonenum'=> $request->phonenum,
    ]);

}

}
