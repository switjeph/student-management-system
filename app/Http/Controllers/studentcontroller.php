<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=student::all();
        return view('index', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data=$request->validate([
            'name'=>'required|string' ,
            'email'=>'required|email' ,
            'learning_track'=>'required|string',
            'phone_no'=>'required|string',
            'twitter_username'=>'nullable|string',
            'linkedin_username'=>'nullable|string',
            'image'=>'required|image|mimes:jpeg,jpg,png|max:3072',

        ]);

        $data['image'] = $request->file('image')->store('student_images', 'public');
        student::create($data);
        return to_route('index')->with('message', 'Student profile created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        return "show page";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student=student::findOrFail($id);
        return view('edit', ['student'=>$student]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = student::findOrFail($id);
         $data=$request->validate([
            'name'=>'required|string' ,
            'email'=>'required|email' ,
            'learning_track'=>'required|string',
            'phone_no'=>'required|string',
            'twitter_username'=>'nullable|string',
            'linkedin_username'=>'nullable|string',
            'image'=>'nullable|image|mimes:jpeg,jpg,png|max:3072',

        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('student_images', 'public');
        }

        $student->update($data);
        return to_route('index')->with('message', 'Student profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = student::findOrFail($id);
        $student->delete();

        return to_route('index')->with('message', 'Student profile deleted successfully');
    }
}
