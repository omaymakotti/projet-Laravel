<?php

namespace App\Http\Controllers;

use App\Models\Course;  // Importer la classe Course
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Afficher la liste des cours
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    // Afficher le formulaire pour ajouter un cours
    public function create()
    {
        return view('courses.create');
    }

    // Enregistrer un nouveau cours
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        Course::create($request->all());

        return redirect()->route('courses.index');
    }
    public function edit(Course $course)
{
    return view('courses.edit', compact('course'));
}
public function update(Request $request, Course $course)
{
    $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
    ]);

    $course->update($request->all());

    return redirect()->route('courses.index');
}
public function destroy(Course $course)
{
    $course->delete();
    
    return redirect()->route('courses.index');
}

}
