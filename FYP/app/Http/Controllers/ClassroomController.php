<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    //
    public function addClass()
    {
        return view('class.addclass');
    }

    public function createClass(Request $request)
    {
        $classroom = new Classroom();
        $classroom->class_name = $request->class_name;
        $classroom->class_code = $request->class_code;
        $classroom->save();
        return back()->with('class_added','Class is successfully created!');
    }

    public function getClass()
    {
        $classrooms = Classroom::orderBy('id','DESC')->get();
        return view('class.classrooms',compact('classrooms'));
    }

    public function getClassByID($id)
    {
        $classroom = Classroom::where('id',$id)->first();
        return view('class.thisclass',compact('classroom'));
    }

    public function deleteClass($id)
    {
        Classroom::where('id',$id)->delete();
        return back()->with('class_deleted','Class has been deleted successfully!');
    }

    public function editClass($id)
    {
        $classroom = Classroom::find($id);
        return view('class.editclass',compact('classroom'));
    }

    public function updateClass(Request $request)
    {
        $classroom = Classroom::find($request->id);
        $classroom->class_name = $request->class_name;
        $classroom->class_code = $request->class_code;
        $classroom->save();
        return back()->with('class_updated','Class has been updated successfully!');
    }
}
