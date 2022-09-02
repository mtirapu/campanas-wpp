 
    @csrf

    <label class="uppercase text-gray-700 text-xs">Título</label>
    <span class="text-xs text-red-600"> @error('funnel_nombre') {{ $message }} @enderror </span>

    <input type="text" name="funnel_nombre" class="rounded border-gray-200 w-full mb-4" value="{{ old('funnel_nombre', $funnel->funnel_nombre) }}">

    <label class="uppercase text-gray-700 text-xs">Fecha de Registro</label>
    <span class="text-xs text-red-600"> @error('funnel_fecha_registro') {{ $message }} @enderror </span>

    
    <input type="date" name="funnel_fecha_registro" class="rounded border-gray-200 w-full mb-4" value="{{ old('funnel_fecha_registro', $funnel->funnel_fecha_registro) }}">

    <div class="flex justify-between items-center">

        <a href="{{ route('funnels.index') }}" class="text-indigo-600" > Volver </a>

        <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">

    </div>