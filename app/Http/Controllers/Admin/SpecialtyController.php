<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Speciality;
use App\Http\Controllers\Controller;
class SpecialtyController extends Controller
{

	

    public function index()
    {
    	$specialties = Speciality::all();
    	return view('specialties.index', compact('specialties'));
    	
    }

     public function create()
    {
    	return view('specialties.create');
    	
    }

      public function store(Request $request)
    {
           $rules = [

            'name'        => 'required|min:3'
           // 'email'       => 'required|unique:email,email',
            //'dni'         => 'required|digits:8',
            //'addres'      => 'nullable|min|5',
           // 'phone'       => 'nullable|min|6'
        ];

        $messages = [

            'name.required' => 'Es necesario ingresar un nombre',
            'name.min' => 'minimo el nombre debe tener tres caracteres',
        ];
        $this->validate($request,$rules,$messages);
        //$this->performValidation($request);
        
		$specialty = new Speciality();
		$specialty->name = $request->input('name');   
		$specialty->description = $request->input('description'); 	
		$specialty->save();

		//return back();
        $notification = 'Especialidad registrada correctamente';
       
		return redirect('/specialties')->with(compact('notification'));
    }


	public function edit (Speciality $specialty)
	{

		    return view('specialties.edit',compact('specialty'));

	}

        public function update(Request $request,Speciality $specialty)
    {

    	//validaciones al lado del servidor
    	//$this->performValidation();



		$specialty->name = $request->input('name');   
		$specialty->description = $request->input('description'); 	
		$specialty->save();//update

		//return back();
         $notification = 'Especialidad actualizada correctamente';
		return redirect('/specialties')->with(compact('notification'));;
    }

    public function destroy(Speciality $specialty)
    {
        $deletedName = $specialty->name;
        $specialty->delete();
         $notification = 'Especialidad '.$deletedName.'Eliminada correctamente';
        return redirect('/specialties')->with(compact('notification'));;;
    }

    private function performValidation()
    {

                //validaciones al lado del servidor
        $rules = [
            'name' => 'required|min:3'
        ];
        $messages = [

            'name.required' => 'Nombre requerido',
            'name.min' => 'debe tener como minimo 3 caracteres',
        ];

        $this->validate($request,$rules,$messages);


    }

}
