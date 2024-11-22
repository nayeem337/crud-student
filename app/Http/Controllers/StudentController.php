<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students, $student;

    public function index()
    {
        return view('student.index');
    }


    public function create(Request $request)
    {
        Student::newStudent($request);
        return back()->with('message', 'Student info save successfully.');
    }

    public function manage()
    {
        $this->students = Student::all();
        return view('student.manage', ['students' => $this->students]);
    }

    public function edit($id)
    {
        $this->student = Student::find($id);
        return view('student.edit', ['student' => $this->student]);
    }

    public function update(Request $request, $id)
    {
        Student::updateStudent($request, $id);
        return redirect('/student/manage')->with('message', 'Student info update successfully...');
    }



    public function delete($id)
    {
        Student::deleteStudent($id);
        return back()->with('message', 'Student info delete successfully');
    }

}
