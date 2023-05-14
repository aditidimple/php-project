<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
</head>

<body>
    <h1>User details:   </h1>

<table align = "left" border = "1" cellpadding = "3" cellspacing = "0">



	<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "signupregister";
    
    $conn = new mysqli($servername, $username, $password, $db_name, 3307);

    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];

    
    
    $sql = "INSERT INTO users VALUES('$first_name','$last_name', '$email', '$password', '$confirm_password')";

    $store = mysqli_query($conn, $sql);
   

    $query = "select * from users";
    
    

    $stmt = mysqli_query($conn, $query);

    /*echo"<tr>";
          echo"<th>first_name</th>";
          echo"<th>last_name</th>";
          echo"<th>email</th>";
          echo"<th>password</th>";
          echo"<th>confirm_password</th>";
        echo"</tr>";*/


    

    while($row = mysqli_fetch_array($stmt)) {

        echo "<tr> <td>" .$row["first_name"]. "</td> <td>" .$row["last_name"]. "</td> <td>
         ".$row["email"]. "</td> <td>" .$row["password"]. "</td> <td>" .$row["confirm_password"]. "</td> </tr>";
    }    
 



     mysqli_close($conn);

     ?>
 </table>    
		
</body>

</html>




