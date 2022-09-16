
    <x-app-layout>

    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Campañas') }}
        </h2>

        {{-- <a href=" {{ route('funnels.show', $funnels) }} " class="text-xs bg-gray-800 text-white rounded px-2 py-1">Crear Campaña</a> --}}

    </x-slot>

    @vite('resources/css/app.css')

    <div class="container-tarjetas flex flex-row flex-wrap bg-transparent max-w-7xl mx-auto mt-10 justify-between">
        
        
        @foreach ($funnels as $funnel)
            <div class="tarjeta flex flex-col p-6 bg-white m-2 mb-10 w-30 rounded-md shadow-md">
                <h3 class="font-bold text-xl relative mb-5">{{ $funnel->funnel_nombre }}</h3>
                <p class="my-1"><span class="font-bold underline">Fecha Registro:</span> {{ $funnel->funnel_fecha_registro }} </p>
                <p class="my-1"><span class="font-bold underline">Cantidad Mensajes:  </span></p> 

                <div class="flex mt-4">

                    <a  href=" {{ route('funnel_single', [$funnel->id]) }} "
                        class=" bg-gray-400 text-white rounded px-4 py-2"
                    > Ver </a>

                    {{-- <a href=" {{ route('funnels.edit', $funnel) }} " class=" bg-gray-500 text-white rounded px-4 py-2 ml-2"> Editar </a>
                    
                    <form action=" {{ route('funnels.destroy', $funnel) }} " method="POST">
                        @csrf
                        @method('DELETE')
    
                        <input type="submit" value="Eliminar" class="bg-gray-800 text-white rounded px-4 py-2 ml-2 cursor-pointer" onclick="return confirm('Desea eliminar el post?')">
                    </form>  --}}

                </div>
            
            </div>
        @endforeach

    </div>

</x-app-layout>