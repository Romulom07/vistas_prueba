<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
<link rel="stylesheet" href="{{mix('css/app.css')}}">

    <title></title>
</head>

<body>
<body class="bg-gray-600 antialiased flex font-sans text-gray-900">
    <form class="bg-white mx-auto max-w-2xl  h-3/5 my-32 inputs space-y-4">
      <div>
        <h1 class="contenedor px-4 w-2x1 text-1xl text-white font-bold bg-blue-900 h-12 p-4">Agregar Usuario</h1>
      </div>
      <div class="flex space-x-4">
        <div class="w-1/2 px-2">
          <label for="Nombre">Nombre</label>
          <input
            class="bg-gray-200 border border-gray-400 py-2 w-full focus:outline-none focus:border-teal-400"
            type="text" value="nombre"/>
        </div>
        
        <div class="w-1/2 px-2">
          <label for="lastname">Apellido</label>
          <input
            class="bg-gray-200 border border-gray-400 px-4 py-2 w-full focus:outline-none focus:border-teal-400"
            type="text" value="apellido"/>
        </div>
        </div>
        <div class="flex space-x-4">
        <div class="w-1/2 px-2 ">
          <label for="Nombre">Cédula o Rif</label>
          <div class="input-group bg-black">
            <span class="input-group-addon"><select class="w-1/4"><option>V</option><option>E</option></select><input type="text" class="w-9/12 form-control bg-gray-200 border border-gray-400 px-4 py-2 focus:outline-none focus:border-teal-400" placeholder="Cédula o Rif"> </input></span> 
          </div>
        </div>
        
        <div class="w-1/2 px-2">
          <label for="lastname" class="">Género</label>
          <span class="block"><input type="radio" value="Masculino" class="m-3"/>Masculino</input><input type="radio" value="Femenino" class="m-3"/>Femenino</input><input type="radio" value="Otro" class="m-3"/>Otro</input></span>
        </div>
        </div>
        <div class="flex space-x-4">
        <div class="w-1/2 px-2">
          <label for="Nombre">Email</label>
          <input
            class="bg-gray-200 border border-gray-400 px-4 py-2  w-full focus:outline-none focus:border-teal-400"
            type="email" value="Email"/>
        </div>
        
        <div class="w-1/2 px-2">
          <label for="lastname">Teléfono</label>
          <input
            class="bg-gray-200 border border-gray-400 px-4 py-2 w-full focus:outline-none focus:border-teal-400"
            type="tel" value="Teléfono" />
        </div>
        </div>
        <div class="flex space-x-4">
        <div class="w-1/2 px-2">
          <label for="Nombre">Contraseña</label>
          <input
            class="bg-gray-200 border border-gray-400 px-4 py-2 w-full focus:outline-none focus:border-teal-400"
            type="password" value="Contraseña"/>
        </div>
  
        <div class="w-1/2 px-2">
          <label for="lastname">Confirmar Contraseña</label>
          <input
            class="bg-gray-200 border border-gray-400 px-4 py-2 w-full focus:outline-none focus:border-teal-400"
            type="password" value="Confimar Contraseña"/>
        </div>
        </div>
        <div class="flex space-x-4">
        <div class="w-2/3 px-2">
          <label for="lastname" class="">Rol</label>
          <span class="block"><input type="radio" value="Administrador" class="m-3"/>Administrador</input><input type="radio" value="Manager" class="m-3"/>Manager</input><input type="radio" value="Cliente" class="m-3"/>Cliente</input><input type="radio" value="Usuario" class="m-3"/>Usuario</input></span>
        </div>
        </div>
        <div class="flex space-x-4">
        <div class="m-4 p-4 w-1/4 mx-auto bg-blue-900 text-white text-center rounded-ms">
          <button type="submit">Agregar</button>
        </div>
        </div>
        
        
</body>
</html>