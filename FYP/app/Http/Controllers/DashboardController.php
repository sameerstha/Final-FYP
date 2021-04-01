<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller

{
    //
    public function index()
    {
        if(Auth::user()->hasRole('admin')){
            return view('dashboard');
        }elseif(Auth::user()->hasRole('teacher')){
            return view('teacherdashboard');
        }elseif(Auth::user()->hasRole('student')){
            return view('studentdashboard');
        }
    }

    public function class()
    {
        return view('class.addclass');
    }

    public function teacherprofile()
    {
        return view('teacherprofile');
    }

    public function studentprofile()
    {
        return view('studentprofile');
    }

    public function teacherclassroom()
    {
        return view('teacherclassroom');
    }
}