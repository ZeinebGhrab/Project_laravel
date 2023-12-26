<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light m-2 text-center">
    <div class="container-fluid">
        <div class="d-flex justify-content-center w-100">
            <h1 class="fw-light text text-justify text-success">Ajouter un employée</h1>
        </div>
    </div>
</nav>
<hr/>
    @if(session('status'))
    <div class="alert alert-success">
        {{session("status")}}
    </div>
    @endif
<form action="/ajouter/traitement" method="POST" class="form-group m-3 text-center">
    @csrf
<div class="mb-3 row">
    <label for="FirstName" class="col-sm-2 col-form-label text-info text-bold">Nom :</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="firstName">
      @error("firstName")
    <div class="text-danger">{{$message}}</div>
    @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label for="lastName"  class="col-sm-2 col-form-label text-info text-bold">Prénom : </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="lastName">
      @error("lastName")
    <div class="text-danger">{{$message}}</div>
    @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label for="cin" class="col-sm-2 col-form-label text-info text-bold">CIN : </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="cin">
      @error("cin")
    <div class="text-danger">{{$message}}</div>
    @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label for="mission" class="col-sm-2 col-form-label text-info text-bold">Mission : </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="mission">
      @error("mission")
    <div class="text-danger">{{$message}}</div>
    @enderror
    </div>
  </div>
  <div class="text-center">
  <button type="submit" class="btn text-white bg-info m-2">Ajouter un employée </button>
</div>
</form>
<div class="text-center">
  <a href="/employee" class="btn m-2 bg-secondary text-white"> Revenir à la liste des employées</a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>