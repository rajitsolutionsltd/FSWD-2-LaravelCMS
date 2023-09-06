<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Course;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academicYears = AcademicYear::with('course')->get();
        return view('backEnd.pages.academic_year.index', \compact('academicYears'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courseOptions = Course::pluck('name', 'id')->toArray();

        return view('backEnd.pages.academic_year.create', compact('courseOptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'order_level' => 'required|numeric',
            'course'=> 'required'
        ]);


        $year = new AcademicYear;
        $year->name = $request->name;
        $year->order_level = $request->order_level;
        $year->course_id = $request->course;
        $year->save();

        return redirect()->route('academic-year.index')->with('success', 'Academic Year is created successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
