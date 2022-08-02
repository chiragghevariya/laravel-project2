<?php


include 'connection.php';



if(isset($_POST['submit'])){
       
       $name=$_POST['name'];      //name of input
       $email=$_POST['email'];      //name of input
       $subject=$_POST['subject'];      //name of input
       $message=$_POST['message'];        //name of input
     

      $sql="insert into `contact_us`(name,email,subject,message)  
      values('$name', '$email', '$subject','$message')";

       $result=mysqli_query($con,$sql);
       
       if($result){
            //echo" data inserted successfully";
       header('location:front.php');
       }else{
          die(mysqli_error($con));
        }
   }

  


?>
