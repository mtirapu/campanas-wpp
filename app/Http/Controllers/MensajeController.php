<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;
use App\Models\Funnel;

class MensajeController extends Controller
{

    public function index()
    {
        $mensajes = Mensaje::get();

        $mensaje_funnel_id = Mensaje::value('funnel_id');

        $funnel_nombre = Funnel::where('id', $mensaje_funnel_id)->value('funnel_nombre');

        return view('mensajes.index', [ 'mensajes' => $mensajes, 'funnel_nombre' => $funnel_nombre ]);
    }

    /* Dentro de los parentesis declaramos lo que va a 
        recibir esta funcion. En este caso, recibira el
        post que se va a eliminar. */
    public function destroy(Mensaje $mensaje)
    {
        $mensaje->delete();

        // Retornamos a la ruta anterior.
        return back();
    }
}
