<?php
    include_once "config.php";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["typevisit"])) {
            $visit = $_POST["typevisit"];
            $visit = mysqli_real_escape_string($conn, $visit);
            $sql = mysqli_query($conn, "SELECT * FROM showdata WHERE tovisit = '{$visit}'");
             $output="";
             $i=1;
            if(mysqli_num_rows($sql)>0){
                echo '<tr>
                <th scope="col">S.No.</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Sex</th>
                <th scope="col">Type of visit</th>
              </tr>';

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
            echo $output;
        } else {
            echo "Select a visit type";
        }
    }
?>
