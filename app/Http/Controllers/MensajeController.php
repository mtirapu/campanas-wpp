<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;
use App\Models\Funnel;

class MensajeController extends Controller
{

    public function create($id, Mensaje $mensaje)
    {

        $mensaje->funnel_id = $id;

        return view( 'mensajes.create', [ 'mensaje' => $mensaje ] );
    }


    public function store(Request $request)
    {

        $request->validate([
            'mensaje_cuerpo' => 'required',
            'mensaje_dias_act' => 'required'
        ]);

        $mensaje = $request->user()->mensajes()->create([

            'funnel_id' => $request->funnel_id,
            'mensaje_cuerpo' => $request->mensaje_cuerpo,
            'mensaje_dias_act' => $request->mensaje_dias_act

        ]);

        return redirect()->route('funnels');
    }







    /*
    
    public function index()
    {
        $mensajes = Mensaje::get();

        $mensaje_funnel_id = Mensaje::value('funnel_id');

        $funnel_nombre = Funnel::where('id', $mensaje_funnel_id)->value('funnel_nombre');

        return view('mensajes.index', [ 'mensajes' => $mensajes, 'funnel_nombre' => $funnel_nombre ]);
    }


    public function create(Mensaje $mensaje)
    {

        dd ($mensaje);

        return view('mensajes.create', [
            
            'funnel' => $funnel
        ]);
    }


    public function store(Request $request)
    {

        dd($request);

        die('Hi');

        $request->validate([
            'mensaje_cuerpo' => 'required',
            'mensaje_dias_act' => 'required'
        ]);

        echo $funnel->id;

        die('Hi');

        $mensaje = $request->user()->mensajes()->create([

            'funnel_id' => $id,
            'mensaje_cuerpo' => $request->mensaje_cuerpo,
            'mensaje_dias_act' => $request->mensaje_dias_act

        ]);

        return redirect()->route('funnels.show', [
            'funnel' => $funnel,
            'mensaje' => $mensaje
        ]);
    }

        public function destroy(Mensaje $mensaje)
        {
            $mensaje->delete();
    
            // Retornamos a la ruta anterior.
            return back();
        }
    
    */
}
