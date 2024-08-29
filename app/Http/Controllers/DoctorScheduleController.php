<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorScheduleController extends Controller
{
    //index
    public function index(Request $request)
    {
        $doctorSchedules = DoctorSchedule::with('doctor')
            ->when($request->input('doctor_id'), function ($query, $doctor_id) {
                return $query->where('doctor_id');
            })->orderBy('doctor_id', 'asc')
            ->paginate(10);
        return view('pages.doctor_schedules.index', compact('doctorSchedules'));
    }

    //create
    public function create()
    {
        $doctors = Doctor::all();
        return view('pages.doctor_schedules.create', compact('doctors'));
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required',
        ]);

        //if senin is not empty
        if ($request->monday) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Monday';
            $doctorSchedule->time = $request->monday;
            $doctorSchedule->save();
        }

        //if selasa is not empty
        if ($request->tuesday) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Tuesday';
            $doctorSchedule->time = $request->tuesday;
            $doctorSchedule->save();
        }

        //if rabu is not empty
        if ($request->wednesday) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Wednesday';
            $doctorSchedule->time = $request->wednesday;
            $doctorSchedule->save();
        }

        //if kamis is not empty
        if ($request->thursday) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Thursday';
            $doctorSchedule->time = $request->thursday;
            $doctorSchedule->save();
        }

        //if jumat is not empty
        if ($request->friday) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Friday';
            $doctorSchedule->time = $request->friday;
            $doctorSchedule->save();
        }

        //if sabtu is not empty
        if ($request->saturday) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Saturday';
            $doctorSchedule->time = $request->saturday;
            $doctorSchedule->save();
        }

        //if minggu is not empty
        if ($request->sunday) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Sunday';
            $doctorSchedule->time = $request->sunday;
            $doctorSchedule->save();
        }

        return redirect()->route('doctor-schedules.index')->with('success', 'Data berhasil ditambahkan.');
    }

    //edit
    public function edit($id)
    {
        $doctorSchedule = DoctorSchedule::find($id);
        $doctors = Doctor::all();
        return view('pages.doctor_schedules.edit', compact('doctorSchedule', 'doctors'));
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'doctor_id' => 'required',
            'day' => 'required',
            'time' => 'required',
        ]);

        $doctorSchedule = DoctorSchedule::find($id);
        $doctorSchedule->doctor_id = $request->doctor_id;
        $doctorSchedule->day = $request->day;
        $doctorSchedule->time = $request->time;
        $doctorSchedule->status = $request->status;
        $doctorSchedule->note = $request->note;
        $doctorSchedule->save();

        return redirect()->route('doctor-schedules.index')->with('success', 'Data berhasil diupdate.');
    }

    //destroy
    public function destroy($id)
    {
        DoctorSchedule::find($id)->delete();
        return redirect()->route('doctor-schedules.index');
    }
}
