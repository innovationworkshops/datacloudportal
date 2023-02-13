<?php

require_once ("component.php");
require_once ("operation.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Cloud Portal</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<main>
    <div class="container text-center">
         <!--Navigation -->
     <div style="margin: 30px; margin-top: 50px;">  <center> 
 <h1 >   Data Cloud Demo Portal </h1> 
      <h3> A Demo Portal Hosted on Heroku  <h3> 
      <img src="wide-characters.jpg"> 
      </div>  </center>
     <center> <div style="margin: 30px; margin-top: 20px;"> 
    <a class="more" href="index.php">Home </a> &nbsp;&nbsp;&nbsp; <a class="more" href="leads.php">Leads </a> &nbsp;&nbsp;&nbsp;<a class="more" href="customers.php">Customers</a> 
    <hr style="width:70%;">
         <h3> Lead Management <h3> 
     </div></center>
          <!--Navigation -->

        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="pt-2" style="display:none;">
                    <?php inputElement("<i class='fas fa-id-badge'></i>","ID", "lead_id",setID()); ?>
                </div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-envelope-square'></i>","Email", "email",""); ?>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-user'></i>","Last Name (required)", "last_name",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-user'></i>","First Name", "first_name",""); ?>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                        <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                        <?php buttonElement("btn-update","btn btn-light border","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                        <?php buttonElement("btn-delete","btn btn-danger","<i class='fas fa-trash-alt'></i>","delete","data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
                        <?php deleteBtn();?>
                </div>
            </form>
        </div>

        <!-- Bootstrap table  -->
        <div class="d-flex table-data" style="margin-bottom:30px; padding-bottom:30px;">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                   <?php


                   if(isset($_POST['read'])){
                       $result = getData();

                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>

                               <tr>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['email']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['last_name']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo '' . $row['first_name']; ?></td>
                                   <td ><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i></td>
                               </tr>

                   <?php
                           }

                       }
                   }


                   ?>
                </tbody>
            </table>
        </div>


    </div>
</main>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="main.js"></script>
</body>
</html>
