<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Servicio;

class ServiciosController extends Controller
{
   /**
    * @param \Iluminate\Http\Request $request
     *@return \Iluminate\Http\Response
    */
    
    public function index()
    {
     
      $servicios = Servicio::latest('titulo')->paginate();
      
      return view('servicios',compact('servicios'));
    }

    public function show($id) {
      return Servicio::find($id);
      //return $id;
      }
}