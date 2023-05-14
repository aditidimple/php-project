<!DOCTYPE html>
<html>
<head>
    <title>login form page</title>

</head>
<body>
    <?php
     //  $servername = "localhost";
    //  $username = "root";
    //  $password = "";
    //  $db_name = "signupregister";
     
    //  $conn = new mysqli($servername, $username, $password, $db_name, 3307);

    //  echo"connection sucessfully..........";

    $enteredEmail = $_REQUEST['emailByForm'];
    $eneterPassword = $_REQUEST['passwordByForm'];

   
    echo $enteredEmail;

    //  $query = "select * from users where email = $emailByForm  and password = $emailByForm";

    //  $stmt = mysqli_query($conn,$query);

    //  if ($row = mysqli_fetch_array($stmt)) {
    //     echo $row;
    //  }


    // mysqli_close($conn);
     ?>
    
     

</body>


</html>

