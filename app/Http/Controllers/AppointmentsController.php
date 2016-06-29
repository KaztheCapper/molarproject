<?php

namespace App\Http\Controllers;


use App\Patient;
Use App\Appointment;
use Illuminate\Http\Request;

use App\Http\Requests;

class AppointmentsController extends Controller
{
    public function store(Request $request, Patient $patient)
    {

        $patient->addAppointment(

            new Appointment($request->all())

        );

        return back();
    }
    public function edit(Appointment $appointment)
    {
        return view('appointments.edit', compact('appointment'));

    }
    public function update(Request $request, Appointment $appointment)
    {
        $appointment->update($request->all());

        return back();



    }
}
