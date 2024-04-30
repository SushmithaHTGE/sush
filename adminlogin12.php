<?php
session_start();
require_once "connection.php";

$message ="";
$role="";
if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password =$_POST["password"];
   
    $query ="SELECT * FROM user WHERE username='$username' AND
      password1='$password'";
    
    $result =mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
          if($row["role"]=="Admin")
          {
            $_SESSION['User']=$row["username"];
            $login_session =$row["username"];
            $_SESSION['role']=$row["role"];
            header('Location: admin/admin_index.php');
          }
          else
          if($row["role"]=="HR")
          {
            $_SESSION['User']=$row["username"];
            $_SESSION['role']=$row["role"];
            header('Location: HR/HR_index.php');
          }
          else
          {
            $_SESSION['User']=$username;
            // $login_session =$username;
            $_SESSION['role']=$row["role"];
          //  echo  $_SESSION['User']; 
          // echo $login_session; 
            header('Location: employee/employee_index.php');
          }

        }
    }
    else
    {
       header('Loction: index.php');
    }

}


?>