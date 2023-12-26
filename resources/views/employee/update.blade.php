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
            <h1 class="fw-light text text-justify text-success">Modifier un employé</h1>
        </div>
    </div>
</nav>
<hr/>
    @if(session('status'))
    <div class="alert alert-success">
        {{session("status")}}
    </div>
    @endif
<form action="/update/traitement" method="POST" class="form-group m-3 text-center">
    @csrf
    <input type="hidden" name="id" value="{{$employee->id}}">
<div class="mb-3 row">
    <label for="FirstName" class="col-sm-2 col-form-label text-info">Nom :</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="firstName" value="{{$employee->firstName}}">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="lastName"  class="col-sm-2 col-form-label text-info">Prénom : </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="lastName" value="{{$employee->lastName}}">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="cin" class="col-sm-2 col-form-label text-info">CIN : </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="cin" value="{{$employee->cin}}">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="mission" class="col-sm-2 col-form-label text-info">Mission : </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="mission" value="{{$employee->mission}}">
    </div>
  </div>
  <button type="submit" class="btn text-white bg-info m-2">Modifier un employée </button>
</form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>