<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </head>
  <body class="p-5">
    <h1>Detalhes</h1>
                                    
    <div class="mb-3">
    <label>ID</label>
    <p class="form-control">{{ $usuarios->id }}</p>
    </div>
   
    <div class="mb-3">
    <label>Nome</label>
    <p class="form-control">{{ $usuarios->nome }}</p>
    </div>

    <div class="mb-3">
    <label>E-mail</label>
    <p class="form-control">{{ $usuarios->email }}</p>
    </div>

    <div class="mb-3">
    <label>Idade</label>
    <p class="form-control">{{ $usuarios->idade }}</p>
    </div>

    <div class="mb-3">
    <label>Telefone</label>
    <p class="form-control">{{ $usuarios->telefone }}</p>
    </div>

    <p><a href="/usuarios" class="btn btn-success">Voltar</a></p>
  </body>
</html>

