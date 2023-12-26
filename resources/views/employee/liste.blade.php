<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employyes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light m-2 text-center">
    <div class="container-fluid">
        <div class="d-flex justify-content-center w-100">
            <h1 class="fw-light text text-justify text-success">Liste des employées</h1>
        </div>
    </div>
</nav>
    <div class="d-grid gap-2 col-6 mx-auto">
    <a href="/ajouter" class="btn bg-success text-white btn-lg m-3"> Ajouter un employée</a>
    </div>
    @if(session('status'))
    <div class="alert alert-success m-2">
        {{session("status")}}
    </div>
    @endif
    <hr/>
    <table class="table text-center m-2">
  <thead class="bg-success p-2 text-white bg-opacity-50">
    <tr>
      <th class="text-center" scope="col">#</th>
      <th class="text-center" scope="col">Nom</th>
      <th class="text-center" scope="col">Prénom</th>
      <th class="text-center" scope="col">CIN</th>
      <th class="text-center" scope="col">Mission</th>
      <th class="text-center" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($employees as $employee)
    <tr>
      <td class="text-center">{{ $employee->id }}</td>
      <td class="text-center">{{ $employee->firstName }}</td>
      <td class="text-center">{{ $employee->lastName }}</td>
      <td class="text-center">{{ $employee->cin }}</td>
      <td class="text-center">{{ $employee->mission }}</td>
      <td class="text-center">
        <a href="/update_employee/{{$employee->id}}" class="btn text-white bg-info">Modifier</a>
        <a href="/delete_employee/{{$employee->id}}" class="btn text-white bg-warning">Supprimer</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

    <nav aria-label="Page navigation example text-center m-4">
    {{$employees->links("pagination::bootstrap-5")}}
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

