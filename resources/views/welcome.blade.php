<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/doctor.css">
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
<div class="doctordiv">
    <h3><marquee>Appointment List</marquee></h3>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Patient Phone</th>
      <th scope="col">Total Fee</th>
      <th scope="col">Paid Amount</th>
    </tr>
  </thead>
  <tbody>
  @foreach($appointments as $appointment)
    <tr>
      <th scope="row">{{$appointment->id}}</th>
      <td>{{$appointment->appointment_date}}</td>
      <td>{{$appointment->patient_name}}</td>
      <td>{{$appointment->patient_phone}}</td>
      <td>{{$appointment->total_fee}}</td>
      <td>{{$appointment->paid_amount}}</td>
      @endforeach
    </tr>
    
  </tbody>
  
</table>
{{$appointments->links('pagination::bootstrap-5')}}
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>