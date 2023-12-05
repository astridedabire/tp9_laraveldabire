<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD IN LARAVEL </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

  <div class="container text-center">
    <div class="row">
      <div class="col-lg-6 ">
        <h1>CRUD LARAVEL 10</h1>
        <a href="/ajouter_tuteur" class="btn btn-primary">Ajouter un tuteur</a>
        <a href="/etudiant" class="btn btn-primary">Voir liste des etudiants</a>

        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
      </div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom </th>
            <th scope="col">Etudiant</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {{-- @php
          $ide = 1;
          @endphp --}}
          @foreach ($tuteurs as $tuteur )
          <tr>
            <td>{{ $tuteur->id }}</td>
            <td>{{ $tuteur->nom }}</td>
            <td>{{ $tuteur->prenom }}</td>
            <td>
                @foreach ($tuteur->etudiants as $etudiant )
                {{ $etudiant->nom }} {{ $etudiant->prenom }} <br>
                    
                @endforeach
                
            </td>

            <td>
              <a href="/update-tuteur/{{ $tuteur->id }}" class="btn btn-primary">Update</a>
              <a href="/delete-tuteur/{{ $tuteur->id }}" class="btn btn-danger">Delete</a>

            </td>
            
          </tr>
          {{-- @php
          $ide += 1;
          @endphp --}}

          @endforeach


         
        </tbody>

      </table>
      {{-- {{ $etudiants->links() }} --}}

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.js"></script>
</body>

</html>