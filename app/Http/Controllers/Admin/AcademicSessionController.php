<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicSession;
use Illuminate\Http\Request;

class AcademicSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academicSessions = AcademicSession::all();
        return view('backEnd.pages.academic_session.index', \compact('academicSessions'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backEnd.pages.academic_session.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:academic_sessions,name'
        ]);

        $academicSession = new AcademicSession();
        $academicSession->name = $request->name;
        $academicSession->save();

        return redirect()->route('academic-session.index')->with('success', 'Academic sessions have been created successfully');
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
        $academicSession = AcademicSession::find($id);
        return view('backEnd.pages.academic_session.edit', compact('academicSession'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:academic_sessions,name,'.$id
        ]);

        $academicSession = AcademicSession::find($id);
        $academicSession->name = $request->name;
        $academicSession->save();

        return redirect()->route('academic-session.index')->with('info', 'Academic sessions have been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $academicSession = AcademicSession::find($id);
        $academicSession->delete();

        return redirect()->route('academic-session.index')->with('warning', 'Academic sessions have been deleted successfully');

    }
}
