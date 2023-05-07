<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/doctor.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor </title>
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
          <a class="nav-link" href="#">Doctor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/appointment">Appointment</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="doctordiv">
            <!-- Button trigger modal -->
        <h4 type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Doctor</h4>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Doctor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="row">
            <div class="col">
            <form action="" method="POST">
                    @csrf
                
                <select selected name="department_id" id="inputState" class="form-select">
                @foreach($departments as $department)
                <option value="{{$department->id}}">{{$department->id}}-{{$department->name}}</option>
                @endforeach
                </select>
                
                </div>

                <div class="col">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" aria-label="Name">
                </div>
                <div class="col">
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone" aria-label="Phone">
                </div>
                <div class="col">
                    <input type="number" class="form-control" id="fee" name="fee" placeholder="Fee" aria-label="Fee">
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    <h3><marquee>Doctor List</marquee></h3>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Fee</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
  @foreach($doctors as $doctor)
    <tr>
      <th scope="row">{{$doctor->id}}</th>
      <td>{{$doctor->name}}</td>
      <td>{{$doctor->phone}}</td>
      <td>{{$doctor->fee}}</td>
      <td><a href="{{url('/delete',$doctor->id)}}">Delete</td>
      <td><a href="{{url('/edit',$doctor->id)}}">Edit</td>
      @endforeach
    </tr>
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>