<!DOCTYPE html>
<html lang="en">

<head>

    
</head>

<body>

	<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  

    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,"movies_db");  
  
    $query=mysqli_query($con,"SELECT * FROM MOVIES WHERE email_id='".$user."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO MOVIES(email_id,password) VALUES('$user','$pass')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  
    header("Location: movies.html");   
    } else {  
    header("Location: error.html");   
    }  
  
    } else {  
    header("Location: error.html");    
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   