<?php

 include 'connection.php';


 if(isset($_POST['submit'])){
  
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];        //name of input
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="insert into `adminform`(firstname,lastname,email,password)  
  values('$firstname','$lastname','$email','$password')";

   $result=mysqli_query($con,$sql);
   
   if($result){
      // echo"data inserted successfully";
    header('location:user.php');
   }else{
      die(mysqli_error($con));
    }
}
?>