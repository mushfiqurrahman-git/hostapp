<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/appointment.css">
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
<div class="main">
            <div class="one">
                <p class="ptext">Appointment Date</p>
                <input type="date" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                <p class="ptext">Select Department</p>
                <select class="form-select" aria-label="Default select example">
                <option selected>--Select--</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
                <p class="ptext">Select Doctor</p>
                <select class="form-select" aria-label="Default select example">
                <option selected>--Select--</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
                <p class="ptextAvail">Available</p>
                <p class="ptext">Fee</p>
                <input type="text" class="form-control" id="patientname" placeholder="" disabled class="disinput">
                <div class="btndiv1">
                <button type="button" class="btn btn-success">Add</button>
                </div>
            </div>
            <div class="two">
              <div class="tableDiv">
            <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col" class="tab">SN</th>
                <th scope="col" class="tab">App Date</th>
                <th scope="col" class="tab">Doctor</th>
                <th scope="col" class="tab">Fee</th>
                <th scope="col" class="tab">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="tab">1</th>
                <td  class="tab">Mark</td>
                <td class="tab">Otto</td>
                <td class="tab">@mdo</td>
                <td class="icon">
                  <svg class="iconred" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                    </svg>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
          <div class="red">
            <p class="ptext">Patient Information </p>
            <form class="row g-3">
            <div class="inputone">
              <input type="text" class="form-control" id="patientname" placeholder="Patient Name">
              <input type="text" class="form-control" id="patientname" placeholder="Patient Phone">
            </div>
            <p class="ptext">Payment</p>
            <div class="inputtwo">
              <input type="text" class="form-control" id="patientname" placeholder="Fee" disabled>
              <input type="text" class="form-control" id="patientname" placeholder="Patient Amount">
            </div>
            </form>
            <button type="button" class="btn btn-primary">SUBMIT</button>
          </div>
                      </div>
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>