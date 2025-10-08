<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Subject;

class TeacherController extends Controller
{
    
    public function index()
    {
        
        $teachers = Teacher::with('subject')->get();

        
        return view('teacher', compact('teachers'));
    }
}
