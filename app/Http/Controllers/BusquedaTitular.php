<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ubicacion;
use App\Clasificacion;
use App\Propietario;

use DB;

class BusquedaTitular extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $propietarios = DB::table('propietarios')
           ->select('propietarios.id','fecha_refrendo','nombre','apellido_paterno','apellido_materno','calle','numero','colonia','codigo_postal','municipio','telefono')
           ->get();

       return view('busquedapropietario',
       ['propietarios' => $propietarios,
        'ubicaciones' => Ubicacion::all(),
        'clasificaciones'=>Clasificacion::all()
     ]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Propietarios::create(request()->all());

        return redirect()->route('busquedapropietario.index');
    }


    /**
     * Display the specified resource.
     *

     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(Propietarios $propietarioItem)
{
    return view('propietario.show', [
        'propietarioItem' => $propietarioItem
    ]);
}

    public function edit($id)
    {

      return view('edit', [
            'propietarios' => Propietario::findOrFail($id),
            'ubicaciones' => Ubicacion::all(),
            'clasificaciones'=>Clasificacion::all()
        ]);
          }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $propietarios = request()->except((['_token','_method']));
        Propietario::where('id','=',$id)->update($propietarios);


    }
      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $propietarios = Propietario::where('id',$id)->delete();
        return back()->with('propietarioeliminado', 'Propietario Eliminado');
          }
}
