
    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-bold text-xl text-gray-800 leading-tight flex items-center justify-between">
                {{ __('Campaña: ' . $funnel->funnel_nombre) }}
            </h2>
    
            <a href=" {{ route('funnels.create') }} " class="text-xs bg-gray-800 text-white rounded px-2 py-1">Crear Campaña</a>
    
        </x-slot>
    
        @vite('resources/css/app.css')
    
        {{ $funnel->funnel_nombre }}
    
    </x-app-layout>