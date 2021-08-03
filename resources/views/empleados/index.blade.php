@extends('layouts.forma')
@section('title', 'Crea variable')


@section('content')





<!-- component -->
<div>
 
  

<div class="overflow-x-auto">
  
  {{-- alertas de tailwind --}}
  <div class="bg-indigo-900 text-center p-5 lg:px-4">
   
  @if (Session::has('mensaje'))
      
 
  <div class="p-2 bg-green-500 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-green-700 uppercase px-2 py-1 text-xs font-bold mr-3">Nuevo</span>
      <span class="font-semibold mr-2 text-left flex-auto bg-green-500 ">{{Session::get('mensaje')}}</span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
  @endif


</div>
  {{-- //// alertas tailwind --}}

  <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
      
    
    <div class="w-full lg:w-5/6">
          <div class="bg-white shadow-md rounded my-6">
              
            
            {{-- // ir a crear --}}
  
  <div class="mx-4 my-4" >
    <button class="  p-4 bg-indigo-900 text-center text-white hover:bg-green-500 ...">
      
      <a href="{{route('empleado.create')}}">
        Crear un Trabajador
      </a>
    </button>
  </div>  

            <table class="min-w-max w-full table-auto">
                  <thead>
                      <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                          <th class="py-3 px-6 text-left">Nombre</th>
                          <th class="py-3 px-6 text-left">Apellidos</th>
                          <th class="py-3 px-6 text-center">Correo</th>
                          <th class="py-3 px-6 text-center">Foto</th>
                          <th class="py-3 px-6 text-center">Actions</th>
                      </tr>
                  </thead>
                  <tbody class="text-gray-600 text-sm font-light">
                      {{-- //============================================================================= --}}
                    @foreach ($empleados as $empleado) 

                      <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                          <td class="py-3 px-6 text-left">
                              <div class="flex items-center">
                                  
                                  <p class="font-medium">{{$empleado->Nombre}}</p>
                              </div>
                          </td>
                          <td class="py-3 px-6 text-left">
                              <div class="flex items-center">
                                 
                                  <p>{{$empleado->Apellidos}}</p>
                              </div>
                          </td>
                          <td class="py-3 px-6 text-center">
                            <div class="flex items-center">
                                 
                                <p>{{$empleado->Correo}}</p>
                            </div>
                          </td>
                          <td class="py-3 px-6 text-center">
                            <img   
                            {{-- luego corremos la sigiente comando: php artisan storage:link  y entrara --}}
                            src="{{ asset('storage/'.$empleado->Foto) }}" 
                            class="w-20 h-20 rounded-full border-gray-200 border transform hover:scale-125"
                           
                            />
                            {{-- <div class="flex items-center justify-center">
                              
                              
                          </div> --}}
                          </td>

                          {{-- /// BOTONES   ========  --}}
                          <td class="py-3 px-6 text-center">
                              <div class="flex item-center justify-center">
                                 
                                  <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <a href="{{route('empleado.edit',$empleado)}}"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                      </svg>
                                    </a> 
                                  </div>
                                  <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                      
                                    <form action="{{route('empleado.destroy',$empleado)}}" method="post" enctype="multipart/form-data"  >
                                      @method('delete')
                                      @csrf
                                      <input type="submit" value="Delete" >

                                    </form>
                                  </div>
                              </div>
                          </td>
                      </tr>

                      @endforeach
                    {{-- //============================================================================= --}}
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
</div>
@stop

