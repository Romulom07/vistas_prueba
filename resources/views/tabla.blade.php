<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
	<!-- Styles -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body class="bg-gray-400">
<div class="space-y-4 m-20 p-5 h-30 w-3/5  mx-auto bg-blue-400 rounded-xl shadow-md  space-x-4 border-white ">
  <span class="block  " ><input type="search" value="Buscar..." class="w-80 h-8"><input type="date" value="Fecha desde" class="h-8 m-2" ><input type="date" value="Fecha hasta" class="h-8" ><button type="submmit" value="buscar" class="w-8 h-8 bg-white m-2">S</button></span>
  <span class="block "><label>Rol:</label><input type="radio" value="Administrador" class="m-3">Administrador</input><input type="radio" value="Manager" class="m-3">Manager</input><input type="radio" value="Cliente" class="m-3">Cliente</input><input type="radio" value="Usuario" class="m-3">Usuario</input></span>
</div>


<div class="p-5 space-y-4 space-x-4 h-50 w-3/5  mx-auto " >
    <button type="submit" class="w-35 h-35 bg-green-400 rounded-xl">Agregar nuevo</button>
    <button type="submit" class="w-35 h-35 bg-red-400 rounded-xl">Mover a la papelera</button>
</div>

<div class="flex flex-col " >
  <div class="my-2 overflow-x-auto mx-auto px-4 sm:px-6 lg:px-8 ">
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
              </td>
            </tr>
            
            <!-- More items... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>





</body>
</html>