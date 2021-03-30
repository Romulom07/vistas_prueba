<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
</head>
<body>
<nav class="">
<ul>
<div class="flex space-x-4">
    <div class="px-2">
        <li><a class="p-2 m-2 bg-blue-400 text-center text-white " href="{{ route('categories.index') }}">Categorias</a></li>
    </div>
<div class="flex space-x-4">
    <div class=" px-2">
        <li><a class="p-2 m-2 bg-blue-400 text-center text-white mx-auto" href="{{ route('sub_categories',) }}">SubCategorias</a></li>
    </div>
<div class="flex space-x-4">
    <div class=" px-2">
        <a class="p-2 m-2 bg-blue-400 text-center text-white mx-auto" href="{{ route('marks.index',) }}">Marcas</a></li>
    </div>
    </div>
    </div>
    </div>
    </ul>
</nav>
</body>
</html>
