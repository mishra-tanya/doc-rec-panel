<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <h1 class="text-center">Doctor's Login</h1>
    <div class="container my-3">
    <div class="row justify-content-center">
    <div class="col-md-4 col-sm-8">
      <div class=" card shadow-lg p-3">
        
      <p class="error text-center text-danger"></p>

      <form action="#" id="form-field" autocomplete="on">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"  required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Login</button>
    </div>
        <div class=" link text-center my-2">Not signed up? <a href="sign_up.php">Signup now</a></div>
</form>
</div>
</div>
</div>
</div>

</div>
</footer>
<script src="javascript/login.js"></script>
</body>
</html>