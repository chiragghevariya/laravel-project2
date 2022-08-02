                 
                  <?php

  include('header.php');
  include('sidebar.php');
  
?>


 <?php 
  
include 'connection.php';

        $id=$_GET['passwordid'];

        

?>


<div class="content-wrapper" style="min-height: 1345.52px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 offset-2">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="userpassword.php" id="t_form" >
                <div class="card-body">

                 <input type="hidden" name="id" value="<?php echo $id; ?>">
                 
                  
                 <div class="form-group">
                    <label>Password</label>
                    <input type="password"   class="form-control" name="password" placeholder="Password">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="update"  value="update" class="btn btn-primary">
                </div>
              </form>
            </div>
            

          </div>
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

  <script src="jquery.validate.min.js"></script>     
  <script src="additional-methods.min.js"></script>





<!-- Main Footer -->
 
 <?php

include('footer.php');
  
 ?>