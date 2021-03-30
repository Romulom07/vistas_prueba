<!DOCTYPE html>
<html>
<head>
	<title>Tabla Marcas</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
	<!-- Styles -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
		
</head>
<body>
@include('layouts.menu')
	<div class="container mx-auto flex justify-end m-4 p-4 w-3/6" >
    	<a type="submit" href="{{ route('marks.create')}}" class="w-35 h-35 bg-green-400 rounded m-2 p-2">Agregar</a>
    	<a type="submit"  class="w-35 h-35 bg-red-400 rounded m-2 p-2">Mover a la papelera</a>
	</div>	
</div>	
<div class="flex flex-col " >
	<div class="py-2 align-middle inline-block  sm:px-6 lg:px-8 ">
		<div class="my-2 overflow-x-auto mx-auto px-4 sm:px-6 lg:px-8 ">
			<div class="w-3/5 mx-auto shadow overflow-hidden border border-grey-800 sm:rounded-lg">
				<table class="w-full mx-auto divide-y divide-gray-200" >
					<thead class="bg-blue-900 ">
					<tr>
					<th class="px-6 py-2 text-white">ID</th>
					<th class="px-6 py-2 text-white">MARCA</th>
					<th class="px-6 py-2 text-white">FECHA</th>
					<th class="px-6 py-2 text-white">OPCIONES</th>
					</tr>
					</thead>
			</div>
		</div>
	</div>
</div>
				
@foreach ($marks as $mark)
<tbody class="bg-white divide-y divide-gray-200">
<td class="text-center"><p>{{$mark['id']}}</p></td>
<td class="text-center"><p>{{$mark['name']}}</p></td>
<td class="text-center"><p>{{$mark->created_at->format('d/m/Y')}}</p></td>
<td class="container flex justify-center  ">
<form action="{{route('marks.destroy', $mark->id)}}" method="post">
		{{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="text-white rounded bg-red-600 m-2 p-2 text-center " type="submit" value="delete" >Eliminar
</svg>
		</button>
		</form>
		<a class=" text-white bg-yellow-500 p-2 m-2 rounded " href="{{ route('marks.edit', $mark)}}" >Editar</a>
		<a class="text-white bg-purple-400 p-2 m-2 rounded " href="" >C</a>
		<a class="text-white bg-indigo-500 p-2 m-2 rounded " href="" >D</a>
</td>
</tbody>
@endforeach	



	
		
</body>   
</html>