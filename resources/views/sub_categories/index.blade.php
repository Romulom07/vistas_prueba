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
				<th class="px-6 py-2 text-white">ELEMENTO</th>
				<th class="px-6 py-2 text-white">CATEGORIA</th>
				<th class="px-6 py-2 text-white">OPCIONES</th>
				</tr>
				</thead>
			</div>
		</div>
	</div>
</div>
				
@foreach ($sub_categories as $subcategoria)

<tbody class="bg-white divide-y divide-gray-200">
	<td class="text-center"><p>{{$subcategoria['id']}}</p></td>
	<td class="text-center"><p>{{$subcategoria['name']}}</p></td>
	<td class="text-center"><p>{{$subcategoria->category->name }}</p></td>
	<td class="text-center">
		<button type="submit" class="m-1 w-14 text-white bg-blue-600 rounded">Editar </button>
		<button type="submit" class="m-1 w-14 text-white bg-blue-600 rounded">Eliminar </button>
		<button type="submit" class="m-1 w-8 bg-blue-600 rounded">c </button>
		<button type="submit" class="m-1 w-8 bg-blue-600 rounded">d </button>
		</td>
		</tbody>
@endforeach	
{{$sub_categories->links() }}	
</body>   
</html>