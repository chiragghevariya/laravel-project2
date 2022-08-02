<?php


include 'connection.php';



if(isset($_POST['submit'])){
       
           
       $email=$_POST['email'];      //name of input
       

      $sql="insert into `subscribe`(email)  
      values( '$email')";

       $result=mysqli_query($con,$sql);
       
       if($result){
            //echo" data inserted successfully";
       header('location:front.php');
       }else{
          die(mysqli_error($con));
        }
   }

  


?>
