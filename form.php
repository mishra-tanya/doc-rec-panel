<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Patient's Detail</title>
      
</head>
<body>
  <header>
   <h1 class="text-center">Patient's Detail</h1>
</header>
<div class="container my-3 ">
  <div class="row justify-content-center">
    <div class="col-md-4 col-sm-8">
      <div class=" card shadow-lg p-3">
<form action="#" id="form-field" autocomplete="on">
  <div class="name">
    <span>Name</span>
    <input type="text" name="name" class="form-control" id="exampleInputName" required>
  </div>

  <div class="mb-3">
    <span>Age</span>
    <input type="number" name="age" class="form-control" id="exampleInputAge" required >
  </div>

  <div class="mb-3">
    <span>Sex</span>
   
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" value="Male" id="flexRadioDefault1" required>
      <span>Male</span>
   </div>

    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" value="Female" id="flexRadioDefault2" required>
      <span>Female</span>
    </div>
     
  <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" value="Others" id="flexRadioDefault3"required>
      <span class="form-check-label">Others</span>
    </div>
  
  </div>

  <div class="mb-3">
    <span>Type of visit</span>
    <select class="form-control" name="typevisit" aria-label="Default select example" required>
  <option selected>Type of visit</option>
  <option value="Eye">Eye</option>
  <option value="Ortho">Ortho</option>
  <option value="General">General</option>
   </select>
    
 <div class="text-center">
  <input type="submit" name="submit" value="Submit" class="btn btn-primary mt-3"></input>
</div>
</form>
</div>
</div>
</div>
</div>
        <script src="javascript/pdetail.js"></script>
</body>
</html>