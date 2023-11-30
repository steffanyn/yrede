<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    <title>Cadastro de usuários</title>
</head>
<body>
    <h1 class="w-full text-center text-xl font-bold">Cadastro de Usuários</h1>

    <form class="card-body max-w-md m-auto" action="{{route('salva-usuario')}}" method="post">
      @csrf

      <div class="form-control">
            <span class="label-text">Foto de Perfil</span>
        <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" 
    xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 
    6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
</div>

    <div class="form-control">
          <label class="label">
            <span class="label-text">Usuário</span>

          </label>
          <input name="usuario" type="text" placeholder="Usuario" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input name="email" type="email" placeholder="Email" class="input input-bordered" required />
        </div>


        <div class="form-control">
          <label class="label">
            <span class="label-text">Bio</span>
          </label>
          <input name="bio" type="text" placeholder="Bio" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Nome</span>
          </label>
          <input name="Nome" type="text" placeholder="Nome" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Senha</span>
          </label>
          <input name="senha" type="password" placeholder="Senha" class="input input-bordered" required />
        </div>
        <br>
        <div  
          class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
  <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
  </svg>
  <span class="sr-only">Alerta</span>
  <div>
    <span class="font-medium">Importante!</span> A senha deve ter no mínimo 8 caracteres e 1 número.
  </div>
</div>
<div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">

<button class="text-white bg-blue-700 hover:bg-blue-800 
font-medium rounded-full text-sm px-5 py-2.5 text-center 
me-2 mb-2 dark:bg-blue-600">Salvar</button>
</body>
</html>