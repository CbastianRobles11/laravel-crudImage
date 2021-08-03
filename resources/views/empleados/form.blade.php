



                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                    Nombre
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    name="Nombre"
                                    
                                    type="text"
                                    placeholder="Nombre"
                                    
                                    

                                    @if(!empty($empleado->Nombre))
                                    value={{ $empleado->Nombre }}
                                    @endif
                                />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                    Apellido
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="lastName"
                                    type="text"
                                    placeholder="Apellidos"
                                    name="Apellidos"
                                    @if(!empty($empleado->Apellidos))
                                    value={{ $empleado->Apellidos }}
                                    @endif
                                />
                            </div>
                        </div>
                       
                       
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Correo
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="email"
                                type="email"
                                placeholder="Email"
                                name="Correo"
                                @if(!empty($empleado->Correo))
                                    value={{ $empleado->Correo }}
                                @endif
                            />
                        </div>
                        
                        
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                Foto
                                </label>
                                @if (!empty($empleado->Foto))
                                    
                                
                                <img   
                                    {{-- luego corremos la sigiente comando: php artisan storage:link  y entrara --}}
                                    src="{{ asset('storage/'.$empleado->Foto) }}" 
                                    class="w-20 h-20 rounded-full border-gray-200 border transform hover:scale-125"
                                
                                />
                                @endif
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    name="Foto"
                                    type="file"
                                    
                                    
                                />
                                <p class="text-xs italic text-red-500">Mensaje de error</p>
                            </div>
                            
                        </div>
                       
                       

