<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funnel;
use Illuminate\Support\Facades\Auth;

class FunnelController extends Controller
{
    public function index()
    {
        return view('funnels.index', [
            'funnels' => Funnel::latest()->paginate()
        ]);
    }

    public function single(Funnel $funnel)
    {
        return route('funnels.single', ['funnel' => $funnel]);
    }

    public function create(Funnel $funnel)
    {
        return view('funnels.create', ['funnel' => $funnel]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'funnel_nombre' => 'required',
            'funnel_fecha_registro' => 'required'
        ]);

        $id = Auth::id(); 

        $funnel = $request->user()->funnels()->create([

            'user_id' => $id,
            'funnel_nombre' => $request->funnel_nombre,
            'funnel_fecha_registro' => $request->funnel_fecha_registro

        ]);

        return redirect()->route('funnels.index');
    }

    public function edit(Funnel $funnel)
    {
        
        return view('funnels.edit', ['funnel' => $funnel]);
    }


    public function update(Request $request, funnel $funnel)
    {
        $request->validate([
            'funnel_nombre' => 'required|unique:funnels',
            'funnel_fecha_registro' => 'required'
        ]);
        
        // Creamos el registro.
        $funnel->update([

            'funnel_nombre' => $request->funnel_nombre,
            'funnel_fecha_registro' => $request->funnel_fecha_registro

        ]);

        return redirect()->route( 'funnels.edit', $funnel );
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
