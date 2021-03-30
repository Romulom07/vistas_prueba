<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
	<!-- Styles -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
@include('layouts.menu')
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
<div class="p-5 space-y-4 space-x-4 h-50 w-3/5  mx-auto " >
    <a type="submit" href="{{ route('Marca.create')}}" class="w-35 h-35 bg-green-400 rounded-xl">Agregar nuevo</a>
    <a type="submit"  class="w-35 h-35 bg-red-400 rounded-xl">Eliminar</a>
</div>					
@foreach ($marks as $mark)
<tbody class="bg-white divide-y divide-gray-200">
<td class="text-center"><p>{{$mark['id']}}</p></td>
<td class="text-center"><p>{{$mark['name']}}</p></td>
<td class="text-center"><p>{{$mark->created_at->format('d/m/Y')}}</p></td>
<td class="text-center">
<form action="{{route('Marca.destroy', $mark->id)}}" method="post">
		{{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-secondary rounded" type="submit" value="delete" >Eliminar
		</button>
		</form>
		<a class="btn btn-secondary rounded btn-xs bg-blue-400" href="{{ route('Marca.edit', $mark)}}" >Editar</a>
	</td>

</td>
</tbody>
@endforeach	



	
		
</body>   
</html>