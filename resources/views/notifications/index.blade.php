<x-app-layout>
    <div class="container mx-auto">
      
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 inline-block min-w-full sm:px-4 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full text-center">
                    <thead class="border-b bg-gray-800">
                      <tr>
                        <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                          #
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                          Identificación
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                          Empleados
                        </th>
                        <th scope="col" class="{{ in_array($user,$correos) ? 'none' : ''}} text-sm font-medium text-white px-4 py-2">
                          Centro de costos
                        </th>
                        <th scope="col" class="{{ in_array($user,$correos) ? 'none' : ''}} text-sm font-medium text-white px-4 py-2">
                            Jefe de inmediato
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                            Novedad
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                            Fecha de inicio
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                            Fecha de finalizacion
                        </th>
                        <th scope="col" colspan="2" class="text-sm font-medium text-white px-4 py-2">
                          
                        </th>
                      </tr>
                    </thead class="border-b">




                    <tbody>
                     @foreach ($notifications as $notification)
                        <tr class="bg-white border-b">
                          
                          
                          
                         
                          
                          


                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">{{ $loop->index + 1  }}</td>
                            <td class="text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap">
                              {{$notification->identificacion}} 
                            </td>
                           <td class="text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap">
                            {{$notification->nombres}}  {{$notification->apellidos}}
                            </td>
                              
                            
                          <td class="{{ in_array($user,$correos) ? 'none' : ''}} text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap">
                            {{$notification->centro_costo}}
                          </td>
                            <td class="{{ in_array($user,$correos) ? 'none' : ''}} text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap">
                              {{$notification->jefe_inmediato}}
                            </td>
                          <td class="text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap">
                            {{$notification->tipo_novedad}}
                          </td>
                            <td class="text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap">
                                {{\Carbon\Carbon::parse($notification->started_date)->translatedFormat('j F, Y h:i:s A')}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap">
                                {{$notification->finish_date}}
                            </td>

                            

                            <td class="text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap">
                              <a href="{{ route('notifications.edit', $notification->id ) }}"><span class="material-icons" style="color:blue; font-size:26px">edit</span></a>
                            </td>

                            <td class="text-sm text-gray-900 font-light px-4 py-2 whitespace-nowrap">
                              <a href="{{ route('notifications.show', $notification->id ) }}"><span class="material-icons" style="color:green; font-size:26px">preview</span></a>
                            </td>

                            
                            
                          </tr class="bg-white border-b">
                        @endforeach
                    </tbody>




                  </table>
                </div>
              </div>
            </div>
          </div> 

        <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
            <a href="{{ url("/excel") }}">Generar Excel </a>
        </button>
    </div>

  
    
    
</x-app-layout>