<!doctype html>
<html lang="en">
  <head>
    <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/doctor.css')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Doctor Appointment</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/doctor">Doctor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/appointment">Appointment</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class=formdiv>
<form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <select selected name="department_id" id="inputState" class="form-select">
                @foreach($departments as $department)
                
                <option value="{{$department->id}}">{{$department->id}}-{{$department->name}}</option>
                @endforeach
                </select>

                <div class="col">
                    <input type="text" class="form-control" id="name" name="name" value="{{$doctor->name}}" placeholder="Name" aria-label="Name">
                </div>
                <div class="col">
                    <input type="number" class="form-control" id="phone" name="phone" value="{{$doctor->phone}}" placeholder="Phone" aria-label="Phone">
                </div>
                <div class="col">
                    <input type="number" class="form-control" id="fee" name="fee" placeholder="Fee" value="{{$doctor->fee}}" aria-label="Fee">
                </div>
                
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
                </form>
                </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>