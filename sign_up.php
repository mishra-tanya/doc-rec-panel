<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's sodium_crypto_sign_ed25519_pk_to_curve25519</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
</head>
<body>
    
<h1 class="text-center">Create New Account</h1>
    <div class="container my-3">
    <div class="row justify-content-center">
    <div class="col-md-6 col-sm-12">
      <div class=" card shadow-lg p-3">
        <p class="error text-center text-danger"></p>

      <form action="#" id="form-field" autocomplete="on">
      <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name:</label>
    <input type="text" class="form-control" name="name" id="exampleInputName"  required>
  </div>

    <div class="mb-3">
        <label for="exampleInputfield" class="form-label">Field:</label>
        <select class="form-select" name="typevisit" method ="get" id="exampleInputfield" aria-label="Default select example"  required>
    <option selected></option>
    <option value="Eye" onclick="filterData('Eye')">Eye</option>
    <option value="Ortho" onclick="filterData('Ortho')">Ortho</option>
    <option value="General" onclick="filterData('General')">General</option>
    </select>
</div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"  required>
        </div>


        <div class="text-center">
        <button type="submit" class="btn btn-primary">Create Account</button>
    </div>
        <div class=" link text-center my-2">Already signed up? <a href="login.php">Login now</a></div>
        
</form>
</div>
</div>
</div>
</div>
</div>

        <script src="javascript/signingup.js"></script>

</body>
</html>