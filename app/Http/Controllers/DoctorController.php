<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Department;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        $doctors = Doctor::orderByDesc('id')->get();
        return view('doctor',['departments'=>$departments,'doctors'=>$doctors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $doctor = new Doctor;
        $doctor->department_id = $request->department_id;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->fee = $request->fee;
        $doctor->save();
        return redirect('doctor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $departments = Department::all();
        $doctor = Doctor::find($id);
        return view('edit',['doctor'=>$doctor,'departments'=>$departments]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $doctor = Doctor::find($id);
        $doctor->department_id = $request->department_id;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->fee = $request->fee;
        $doctor->save();
        return redirect('doctor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        Doctor::destroy($id);
        return redirect('doctor');
    }
}