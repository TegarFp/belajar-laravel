<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::all();
        return view('teacher', ['teacherList' => $teacher]);
    }

    public function show($id)
    {
        $teacher = Teacher::with('class.Students')
        ->findOrFail($id);
        return view('teacher-detail', ['teacher' => $teacher]);
    }
}

