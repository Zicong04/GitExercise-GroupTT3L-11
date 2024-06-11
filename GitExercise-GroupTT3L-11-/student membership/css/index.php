<?php 


/*require_once('config/db.php');
$query = 'select *  from users';
$result = mysqli_query($con,$query)
*/

require_once 'config/db.php';
require_once 'config/fiunctions.php';

$result = display_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Fetch Data From Database in PHP</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
           <div class="col">
               <div class="card mt-5">
                  <div class="card-header">
                    <h2 class="display-6 text-center"> Fetch Data From Database in PHP</h2>
                  </div>
                  <div class="card-body">
                    <table class="table table-boarded text-center">
                        <tr class="bg-dark text-white">
                            <td> User ID </td>
                            <td> Name </td>
                            <td> Password </td>
                            <td> User Type </td>
                            <td> Edit </td>
                            <td> Delete </td>
                        </tr>
                        <tr>
                        <?php
                          
                          while($row = mysqli_fetch_assoc($result))
                          {
                        ?>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo $row['username'];?></td>
                          <td><?php echo $row['password'];?></td>
                          <td><?php echo $row['usertype'];?></td>
                          <td><a href="#" class="btn btn-primary">Edit</a></td>
                          <td><a href="class"="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php
                          }

                        ?>
                       
                    </table>
                  </div>
               </div>
           </div> 
        </div>
    </div>
</body>
</html>