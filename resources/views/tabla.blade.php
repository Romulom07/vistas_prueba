<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
	<!-- Styles -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body class="bg-gray-200">
  <div class="container mx-auto bg-white box-border border-gray-400 border-4 w-3/5 m-12  ">
    <form class="">
      <div class="input-group p-4 m-1">
      <input type="search" name="Busqueda" placeholder="Buscar..."  class="h-9 m-1 w-80 bg-gray-300"> 
      <input type="date" name="Fecha" placeholder="Fecha desde" class="h-9 m-1 bg-gray-300"> 
      <input type="date" name="Fecha" placeholder="Fecha hasta" class="h-9 m-1 bg-gray-300"> 
      <button type="submit" class="bg-gray-300 h-9 w-12 rounded hover:bg-gray-400" >Buscar</button>
      <span> Rol: </span>
      <input type="radio" name="" class="m-2 bg-gray-300">Administrador
      <input type="radio" name="" class="m-2 bg-gray-300">Manager
      <input type="radio" name="" class="m-2 bg-gray-300">Cliente
      <input type="radio" name="" class="m-2 bg-gray-300">Usuario
    </form>
  </div>
  </form>
  </div>   
<div class="container mx-auto w-3/5   " >
  <div class="button-group text-right rounded-md text-white">
    <button type="submit" class="m-2 w-35 h-8 bg-green-400 rounded">Agregar nuevo</button>
    <button type="submit" class="m-2 w-35 h-8 bg-red-400 rounded">Mover a la papelera</button>
  </div>
</div>  
<div class="flex flex-col " >
  <div class="my-2 overflow-x-auto mx-auto ">
    <div class="w-full py-2 align-middle inline-block  sm:px-6 lg:px-8 ">
      <div class="shadow overflow-hidden border-b border-grey-500 sm:rounded-lg">
        <table class="w-3/5 divide-y divide-gray-200  ">
          <thead class="bg-blue-900">
            <tr>
              <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase ">
                Código
              </th>
              <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                Usuario
              </th>
              <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                Rol
              </th>
              <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                Fecha
              </th>
              <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                Opciones
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 ">
                  </div>
                  <div class="ml-5">
                    <div class="text-sm font-medium text-gray-900">
                     001
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                  <div class="flex-shrink-0 ">
                  </div>
                  <div class="ml-5">
                    <div class="text-sm font-medium text-gray-900">
                     Romulo Martinez
                </td>       
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">mromulo07@gmail.com</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Administrador
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
               17/03/2021
              </td>
              <td class="flex items-center p-3 m-3">
              <button type="submit" class="m-1 w-4 bg-green-600">a </button>
              <button type="submit" class="m-1 w-4 bg-green-600">b </button>
              <button type="submit" class="m-1 w-4 bg-green-600">c </button>
              <button type="submit" class="m-1 w-4 bg-green-600">d </button>
              </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>