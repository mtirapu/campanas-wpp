 
    @csrf

    <label class="uppercase text-gray-700 text-xs">Contenido</label>
    <span class="text-xs text-red-600"> @error('mensaje_cuerpo') {{ $message }} @enderror </span>

    <input type="text" name="mensaje_cuerpo" class="rounded border-gray-200 w-full mb-4" value="{{old('mensaje_cuerpo', $mensaje->mensaje_cuerpo)}}">

    <label class="uppercase text-gray-700 text-xs">Días de Activación</label>
    <span class="text-xs text-red-600"> @error('mensaje_dias_act') {{ $message }} @enderror </span>

    
    <input type="text" name="mensaje_dias_act" class="rounded border-gray-200 w-full mb-4" value="{{old('mensaje_dias_act', $mensaje->mensaje_dias_act)}}">

    <input type="text" name="funnel_id" hidden class="rounded border-gray-200 w-full mb-4" value="{{old('funnel_id', $mensaje->funnel_id)}}">


    <div class="flex justify-between items-center">

        <a href="{{ route('funnels') }}" class="text-indigo-600" > Volver </a>

        <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">

    </div>