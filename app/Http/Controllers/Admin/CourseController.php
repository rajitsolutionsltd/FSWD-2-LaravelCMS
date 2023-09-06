<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('backEnd.pages.course.index', \compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backEnd.pages.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'course_code' => 'required',
        ]);

        $course = new Course;
        $course->name = $request->name;
        $course->course_code = $request->course_code;
        $course->save();

        return \redirect()->route('course.index')->with('success', 'Course Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        return view('backEnd.pages.course.edit', \compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'course_code' => 'required',
        ]);

        $course = Course::find($id);
        $course->name = $request->name;
        $course->course_code = $request->course_code;
        $course->save();

        return \redirect()->route('course.index')->with('info', 'Course Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::find($id);
        $course->delete();
        return \redirect()->route('course.index')->with('warning', 'Course deleted Successfully');

    }
}
