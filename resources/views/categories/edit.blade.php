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
<div class="container mx-auto bg-white box-border border-gray-400 border-4 w-3/5 m-12  ">
    <form  method="post" action="{{route('categories.update', $category)}}" class="">
    @method("PUT")
    @csrf
      <div class="p-4 m-1">
        <input type="text" value="{{ $category->name }}" placeholder="Ingrese nombre a editar"  class="h-9 m-1 w-80 bg-gray-300"> 
        <button type="submit" class="bg-gray-300 h-9 w-14 text-center rounded hover:bg-gray-400" > Editar </button>
    </form>
        </div>
</div>
</body>
</html>