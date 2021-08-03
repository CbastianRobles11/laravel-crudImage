
@extends('layouts.forma')
@section('title', 'Crea variable')


@section('content')

    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                    style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"
                ></div>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Crear Empleado</h3>
                    <form action="{{route('empleado.store')}}" method="post" enctype="multipart/form-data"  class="px-8 pt-6 pb-8 mb-4 bg-white rounded" >
                        @csrf
                        
                       
                       
                      


                        @include('empleados.form')
                        <div class="mb-6 text-center">
                            <input
                                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                type="submit"
                                value="Crear"
                            >
                                
                            
                        </div>
                        
                        
                        <hr class="mb-6 border-t" />
                    
                        <div class="text-center">
                            <a
                                class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                href="{{route('empleado.index')}}"
                            >
                               Regresa al Inicio
                            </a>
                        </div>




                    </form>
                


                    </div>
                    </div>
                    </div>
                    </div>
                    