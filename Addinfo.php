<!doctype html>
<html lang="en">

<head>
  <title>Parking Management Systems</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="Style.css"> 
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info p-3">
    <div class="container">
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      </button>

      <form class="d-flex">

        <button class="btn btn-outline-secondary btn-lg bg-light" type="submit">ADMIN</button>
      </form>
    
  </nav>
  <div class="container-fluid">
    <div class="row">
    <nav  id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light  p-4 " >
        <div class="position-sticky">
          <ul class="nav flex-column">
            <div class="container">
              <li class="nav-item">
                <div class="btn-group-vertical mt-2 gap-4 ">
                  <button id="boederRadious" class="btn btn-outline-secondary btn- ">
                    <a class="text-secondary" href="example.php">Search</a>
                  </button>
                  <button id="boederRadious" class="btn btn-outline-secondary btn- ">
                    <a class="text-secondary" href="Misrecord.php">Reecord mistake</a>
                  </button>
                  <button id="boederRadious" class="btn btn-outline-secondary btn- ">
                    <a class="text-secondary" href="example.php">View Information</a>
                  </button>
                 
                  <button id="boederRadious" class="btn btn-outline-secondary btn-">
                    <a class="text-secondary" href="example.php">View mistake</a>
                  </button>

                </div>

              </li>

</div>
          </ul>
        </div>

      </nav>
     
      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4 ">
      <nav class="vavbar navbar-light bg-light p-3">
        <div class="container">
          <a class="navbar-brand fw-bold" href="" >
         <img src="" alt="" width="30" height="24" class="d-inline-block fw-bold">
          ADD INFORMATION  
         </a> 
              
        </div>
       
      </nav>
       
      <div class="container mt-4 bg-light p-3 w-50 text-center ">

<div class="row mb-3" >
  <h6 class="fw-bold mb-4 mt-4">STUDENT INFORMATION</h6>
  <label for="name" class="col-sm-4 col-form-label">Name Last-name</label>
  <div class="col-sm-8 mr-5">
  <input type="text" class="form-control" id="password">
  </div>
</div>


<div class="row mb-3 MT-3" >
  <label for="Stuida" class="col-sm-4 col-form-label ">Student ID</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="stuid">
  </div>
</div>

<div class="form-check form-check-inline mb-3">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Men</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Women</label>
</div>

<div class="row mb-3" >
  <label for="Gender" class="col-sm-4 col-form-label ">Gender</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="gender">
  </div>
</div>
<div class="row mb-3" >
  <label for="Brand" class="col-sm-4 col-form-label ">Brand</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="brand">
  </div>
</div>
<div class="row mb-3" >
  <label for="color" class="col-sm-4 col-form-label">Color</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="color">
  </div>
</div>
<div class="row mb-3" >
  <label for="status" class="col-sm-4 col-form-label">Status</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="ststus">
  </div>
</div>
<div class="row mb-3" >
  <label for="Lplate" class="col-sm-4 col-form-label">lisense plate</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="Lplate">
  </div>
</div>
  <div class="container">
    <div class="text-center ">
    <button type="submit" class="btn btn-primary pw-bold mt-3 ">ADD</button>
  
   
  </div>
  
</div>
</div> 

      


     
       


      </main>

  </div>
<div class="container-fluid">
  <footer class="pt-3 d-flex bg-info justify-content-between p-3 text-cente mt-4" >Parking Management System</footer>
</div>
    </div>
    


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>