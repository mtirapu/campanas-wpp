
    <x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Funnels') }}
        </h2>
    </x-slot>

    @vite('resources/css/app.css')

    <div class="container-tarjetas flex flex-row flex-wrap bg-transparent max-w-7xl mx-auto mt-10 justify-between">
        
        
        @foreach ($funnels as $funnel)
            <div class="tarjeta flex flex-col p-6 bg-slate-100 m-2 mb-10 w-30 rounded-md shadow-md">
                <h3 class="font-bold text-xl relative mb-5">{{ $funnel->funnel_nombre }}</h3>
                <p class="my-1"><span class="font-bold underline">Fecha Registro:</span> {{ $funnel->funnel_fecha_registro }} </p>
                <p class="my-1"><span class="font-bold underline">Cantidad Mensajes:  </span></p>

                <form action=" {{ route('funnels.destroy', $funnel) }} " method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Eliminar" class="bg-gray-800 text-white rounded px-4 py-2" onclick="return confirm('Desea eliminar el post?')">
                </form>  
            
                
            
            </div>
        @endforeach

    </div>

</x-app-layout>