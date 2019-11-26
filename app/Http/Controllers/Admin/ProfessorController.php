<?php

namespace App\Http\Controllers\Admin;

use App\Professors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.professors.index', [
            'professors'=> Professors::paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.professors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'name' =>$request->name,
            'position' =>$request->position,
            'academic_status'=>$request->academic_status,
            'scientific_degree'=>$request->scientific_degree,
            'description_short'=>$request->description_short,
            'description'=>$request->description,
            'image'=>$new_name,
            'image_show'=>$request->image_show,
            'published'=>$request->published
        );
        Professors::create($form_data);
        return redirect()->route('admin.professor.index');
//        Professors::create($request->all());
//        return redirect()->route('admin.professor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Professors $professor)
    {
        return view('admin.professors.edit', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professors $professor)
    {
        $professor->update($request->all());

        return redirect()->route('admin.professor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professors $professor)
    {
        $professor->delete();
        return redirect()->route('admin.professor.index');
    }
}
