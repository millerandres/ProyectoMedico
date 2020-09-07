<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    public function edit()
    {
    	$days = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
    	return view('schedule',compact('days'));

    }

    public function store(Request $request)
    {
    	dd($request->all()); //es para ver que datos exactamente vienen del formulario
    }
}
