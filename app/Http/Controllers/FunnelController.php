<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funnel;
use App\Models\Mensaje;
use Illuminate\Support\Facades\Auth;

class FunnelController extends Controller
{
    public function index()
    {
        $funnels = Funnel::get();

        return view('funnels.index', [ 'funnels' => $funnels ]);
    }
    
    
    public function single_show($id)
    {
        $funnels = Funnel::where('id' , $id)->get();

        $mensajes = Mensaje::where('funnel_id' , $id)->get();

        return view('funnels.single', [ 'funnels' => $funnels, 'mensajes' => $mensajes ]);
    }
    
    // public function index()
    // {
    //     return view('funnels.index', [
    //         'funnels' => Funnel::latest()->paginate()
    //     ]);
    // }

    // public function show(Funnel $funnel)
    // {

    //     $id_funnel = $funnel->id;

    //     $mensajes = Mensaje::where('funnel_id', $id_funnel)->get();

    //     return view('funnels.single', [
            
    //             'funnel' => $funnel ,
    //             'mensajes' => $mensajes
    //         ]);
    // }

    // public function create(Funnel $funnel)
    // {
    //     return view('funnels.create', ['funnel' => $funnel]);
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'funnel_nombre' => 'required',
    //         'funnel_fecha_registro' => 'required'
    //     ]);

    //     $id = Auth::id(); 

    //     $funnel = $request->user()->funnels()->create([

    //         'user_id' => $id,
    //         'funnel_nombre' => $request->funnel_nombre,
    //         'funnel_fecha_registro' => $request->funnel_fecha_registro

    //     ]);

    //     return redirect()->route('funnels.index');
    // }

    // public function edit(Funnel $funnel)
    // {
        
    //     return view('funnels.edit', ['funnel' => $funnel]);
    // }


    // public function update(Request $request, funnel $funnel)
    // {
    //     $request->validate([
    //         'funnel_nombre' => 'required|unique:funnels',
    //         'funnel_fecha_registro' => 'required'
    //     ]);
        
    //     // Creamos el registro.
    //     $funnel->update([

    //         'funnel_nombre' => $request->funnel_nombre,
    //         'funnel_fecha_registro' => $request->funnel_fecha_registro

    //     ]);

    //     return redirect()->route( 'funnels.edit', $funnel );
    // }

    // /* Dentro de los parentesis declaramos lo que va a 
    //     recibir esta funcion. En este caso, recibira el
    //     post que se va a eliminar. */
    // public function destroy(Funnel $funnel)
    // {
    //     $funnel->delete();

    //     // Retornamos a la ruta anterior.
    //     return back();
    // }
}
