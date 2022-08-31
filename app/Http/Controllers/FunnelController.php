<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funnel;

class FunnelController extends Controller
{
    public function index()
    {
        return view('funnels.index', [
            'funnels' => Funnel::latest()->paginate()
        ]);
    }

    /* Dentro de los parentesis declaramos lo que va a 
        recibir esta funcion. En este caso, recibira el
        post que se va a eliminar. */
    public function destroy(Funnel $funnel)
    {
        $funnel->delete();

        // Retornamos a la ruta anterior.
        return back();
    }

}
