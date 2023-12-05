<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">

  </head>
  <body>
   
      <div class="container">
        <div class="row">
        <div class="col-lg-6">
            <h1>AJOUTER UN TUTEUR </h1>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
                <ul>
                    @foreach ($errors->all() as $error )
                        <li class="alert alert-danger">{{ $error }}</li>
                
                    @endforeach
                </ul>
            <form action="/ajouter/traitement_tuteur" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="Non" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="Nom" name="nom"  aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="Prenon" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="Prenom" name="prenom"  aria-describedby="emailHelp">
                  </div>
              
                <button type="submit" class="btn btn-primary">Ajouter un tuteur</button>
                <a href="/tuteur" class="btn btn-danger">Revenir a la liste des tuteurs</a>
              </form> 
        </div>
         
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.js"></script>

  </body>
</html>