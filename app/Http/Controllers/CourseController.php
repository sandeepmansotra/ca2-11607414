<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Course;

class CourseController extends Controller
{
   public function index()
   {
      $course= new \App\Course;
      $courses=$course::all();
      return view('/course',compact('courses'));
   }
   public function create()
   {
      return view ('createcourse');
   }
   public function store()
   {
      $course=new \App\Course;
      $course->course_name=request('course_name');
      $course->course_code=request('course_code');
      $course->duration=request('duration');
      $course->save();
      return redirect('/courses');
   }
   public function edit($id)
   {
      $course = Course::find($id);
      return view('edit',compact('course'));
   }
   public function update($id)
   {
      $course = Course::find($id);
      $course->course_name=request('course_name');
      $course->course_code=request('course_code');
      $project->duration=request('duration');
      $project->update();
      return redirect('/courses');
   }
   public function destroy(Course $course)
   {
      $course->delete();
      return redirect("/courses");
   }
   public function show($id)
   {
      $course=Course::find($id);
      return view ('display',compact('course'));
   }
}
