<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Department;
use DB;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function indexx()
    {
        $appointments = Appointment::orderByDesc('id')->paginate(5);
        $doctors = Doctor::all();
        return view('welcome',['appointments'=>$appointments,'doctors'=>$doctors]);
    }

    public function index()
    {
        $departments = Department::all();
        return view('appointment',['departments'=>$departments]);
    }

    public function doctor($id)
    {
        $doctors = DB::table('doctors')
        ->where("department_id",$id)
        ->pluck('name','id');
        return json_encode($doctors);
    }

    public function doctorFee($id)
    {
        $doctorsFee = Doctor::find($id)->where('id',$id)->get();
        // dd($doctorsFee);
        return json_encode($doctorsFee);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $appointment = new Appointment;
        $appointment->id = $request->department_id;
        $appointment->appointment_date = $request->name;
        $appointment->phone = $request->phone;
        $appointment->fee = $request->fee;
        $appointment->save();
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
