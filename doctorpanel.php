<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Panel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

</head>
<body>
   
    <header>
    <?php
    session_start();
            include_once "php/config.php";
             $sql=mysqli_query($conn,"SELECT field FROM doctor WHERE doc_id={$_SESSION['doc_id']}");
               if(mysqli_num_rows($sql)>0){
                    $row=mysqli_fetch_assoc($sql);
                    $field=mysqli_real_escape_string($conn,$row['field']);
              }
              ?>
    

    <nav-bar>
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary bg-dark">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" href="about.php">About</a>
    </li>

    

    <li class="nav-item">
    <a class="nav-link active" href="https://www.linkedin.com/in/tanya-mishra-b74410239/">Contact Developer</a>
    </li>



    </li>
    </ul>
    </div>
    </div>
    </nav>
    </nav-bar>
    </header>
    <h1 class="text-center">Doctor's Panel</h1>
    <p class="text-center"> <?php echo $row['field']." " ."doctor"; ?></p>
    <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>
    

    <table class="table table-bordered table-hover text-center">
    <thead>
    <tr>
    <th scope="col">S.No.</th>
    <th scope="col">Name</th>
    <th scope="col">Age</th>
    <th scope="col">Sex</th>
    <th scope="col">Type of visit</th>
    </tr>
    </thead>
    <tbody>

    <?php
        include_once "php/config.php";
        $output="";
        $i=1;
      
            $sql=mysqli_query($conn,"SELECT * FROM showdata WHERE tovisit='{$field}'");
            if($sql){
            if(mysqli_num_rows($sql)>0){
                while($row=mysqli_fetch_assoc($sql)){
                $output.=' <tr>
                <th scope="row">'.$i.'</th>
                <td>'.$row['name'].'</td>
                <td>'.$row['age'].'</td>
                <td>'.$row['sex'].'</td>
                <td>'.$row['tovisit'].'</td>
            </tr>';
            $i++;
                }
            
            }
            }
            echo $output;
    
    ?>
    </tbody>
    </table>
    <footer class="bg-dark text-white p-4">
    <a class="nav-link active link-light p-1" aria-current="page" href="index.php">Home</a>
    <a class="nav-link link-light p-1" href="about.php">About</a>
    <a class="nav-link link-light p-1" href="https://www.linkedin.com/in/tanya-mishra-b74410239/">Contact Developer</a>
    
    <div class="text-white text-center p-3">
    <span>Copywrite ©  - 2023
    </span>

    </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
      <script srrc="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            

    </body>
    </html>