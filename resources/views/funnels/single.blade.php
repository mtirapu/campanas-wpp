
    <x-app-layout>

        @foreach ($funnels as $funnel)

        <x-slot name="header">
            <h2 class="font-bold text-xl text-gray-800 leading-tight flex items-center justify-between">

                {{ __('Campaña') }}
            </h2>
    
            <a href=" {{ route('funnels') }} " class="text-xs bg-gray-800 text-white rounded px-2 py-1">Volver</a>
    
        </x-slot>
    
        @vite('resources/css/app.css')

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        <label class="uppercase text-gray-700 text-xs">Título</label>
                        <p class="rounded border-gray-200 w-full mb-4">{{ $funnel->funnel_nombre }}</p>

                        <label class="uppercase text-gray-700 text-xs">Fecha de Registro</label>

                        <p class="rounded border-black-200 w-full mb-4">{{ $funnel->funnel_fecha_registro }}</p>

                        <div class="flex justify-between mt-4">
        
                            {{-- <a href=" {{ route('funnels.edit', $funnel) }} " class=" bg-gray-500 text-white rounded px-4 py-2"> Editar </a> --}}
                            
                            {{-- <form action=" {{ route('mensajes.destroy', $funnel) }} " method="POST">
    
                                @csrf
                                @method('DELETE')
        
                                <input  type="submit"
                                        value="Eliminar"
                                        class="bg-gray-800 text-white rounded px-4 py-2 ml-2 cursor-pointer"
                                        onclick="return confirm('Desea eliminar el post?')">
        
                            </form> --}}
        
                        </div>

                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-6 bg-white border-b border-gray-200 flex justify-between">
                        
                        <h3 class="font-bold text-lg">Mensajes</h3>

                        <a href="{{ route('mensaje_create', [$funnel->id] ) }}" class="text-xs bg-gray-800 text-white rounded px-2 py-1">Crear Mensaje</a>

                    </div>

                    @foreach ($mensajes as $mensaje)
                        <div class="tarjeta flex flex-col p-6 bg-slate-100 m-2 mb-10 w-30 rounded-md shadow-md">
                            <p class="my-1"><span class="font-bold"></span> {{ $mensaje->mensaje_cuerpo }} </p>
                            <p class="my-1"><span class="font-bold">Día Activación:</span> {{ $mensaje->mensaje_dias_act }} </p>
                            <div class="flex mt-4">
            
                                {{-- <a href=" {{ route('mensajes.edit', $mensaje) }} " class=" bg-gray-500 text-white rounded px-4 py-2"> Editar </a>
                                
                                <form action=" {{ route('mensajes.destroy', $mensaje) }} " method="POST">

                                    @csrf
                                    @method('DELETE')
            
                                    <input  type="submit"
                                            value="Eliminar"
                                            class="bg-gray-800 text-white rounded px-4 py-2 ml-2 cursor-pointer"
                                            onclick="return confirm('Desea eliminar el post?')">
            
                                </form> --}}
            
                            </div>
                        
                            
                        
                        </div>
                    @endforeach

                </div>
            </div>

        </div>

        @endforeach
    
    </x-app-layout>