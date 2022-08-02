   <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>


<!-- ./wrapper -->    

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->

<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>

	<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="jquery.validate.min.js"></script>     
  <script src="additional-methods.min.js"></script>
<!-- user -->
<script>

  $(document).ready(function() {
    $("#user").validate({
      rules: { 
        firstname:{ required: true,  string:true},
        lastname:{ required: true,  string:true},
        email: {required:true,email:true},
        password:  {required: true,digits: true },
       
        },
      messages: {
        firstname: { required: "firstName field is required."},
        lastname: { required: "lastName field is required."},
        email: { required: "email field is required."},
        password: { required: "password field is required."},
       
      }
    });
  });
</script>
<!-- user update validation -->
<script>

  $(document).ready(function() {
    $("#userupdate").validate({
      rules: { 
        firstname:{ required: true},
        lastname:{ required: true},
        email: {required:true,email:true},
        },
       
      messages: {
        firstname: { required: "firstName field is required."},
        lastname: { required: "lastName field is required."},
        email: { required: "email field is required."},
        
       
      }
    });
  });

</script>

<script>

  $(document).ready(function() {
    $("#t_form").validate({
      rules: { 

        password:  {required: true,digits: true },

        },
       
      messages: {
        
        password: { required: "password field is required."},
 
       
      }
    });
  });

</script>
<!-- social -->
<script>

  $(document).ready(function() {
    $("#social").validate({
      rules: { 
        title:{ required: true,  string:true},
        url:{ required: true,  url:true},
        class:{ required: true,  string:true},

        },
       
      messages: {
        title: { required: "this field is required."},
        url: { required: "this field is required."},
       class: { required: "this field is required."},

       
      }
    });
  });

</script>
<!-- social update -->
<script>

  $(document).ready(function() {
    $("#socialupdate").validate({
      rules: { 
        title:{ required: true, },
        url:{ required: true,  url:true},
        class:{ required: true, },

        },
       
      messages: {
        title: { required: "this field is required."},
        url: { required: "this field is required."},
        class: { required: "this field is required."},

       
      }
    });
  });

</script>
<!-- class -->
<script>

  $(document).ready(function() {
    $("#class").validate({
      rules: { 
        class:{ required: true,  string:true},
        },
       
      messages: {
        class: { required: "this field is required."},
        
       
      }
    });
  });

</script>

</script>
<!-- class update -->
<script>

  $(document).ready(function() {
    $("#classupdate").validate({
      rules: { 
        class:{ required: true,  string:true},
        },
       
      messages: {
        class: { required: "this field is required."},
        
       
      }
    });
  });

</script>
<!-- team -->
<script>

  $(document).ready(function() {
    $("#team").validate({
      rules: { 
        name:{ required: true,string:true},
        position:{ required: true,string:true},
        discription: {required:true,string:true},
        status: {required:true},
        },
       
      messages: {
        name: { required: "Name field is required."},
        position: { required: "this field is required."},
        discription: { required: "this field is required."},
        status: { required: "this field is required."},
        
       
      }
    });
  });

</script>
<!-- team update -->
<script>

  $(document).ready(function() {
    $("#teamupdate").validate({
      rules: { 
        name:{ required: true},
        position:{ required: true},
        discription: {required:true},
        status: {required:true},
        },
       
      messages: {
        name: { required: "Name field is required."},
        position: { required: "this field is required."},
        discription: { required: "this field is required."},
        status: { required: "this field is required."},
        
       
      },
    });
  });

</script>
<!-- services -->
<script>

  $(document).ready(function() {
    $("#service").validate({
      rules: { 
        title:{ required: true},
        description:{ required: true},
        status: {required:true},
        },
       
      messages: {
        title: { required: "this field is required."},
        description: { required: "this field is required."},
        status: { required: "this field is required."},
        
       
      },
       errorPlacement: function (error, element) {
            if (element.attr('name') == 'status') {

                error.appendTo(element.parent().parent());

            }else{

               error.appendTo(element.parent());
            }
        },
    });
  });

</script>
<!-- service update -->
<script>

  $(document).ready(function() {
    $("#serviceupdate").validate({
      rules: { 
        title:{ required: true},
        description:{ required: true},
        status: {required:true},
        },
       
      messages: {
        title: { required: "this field is required."},
        description: { required: "this field is required."},
        status: { required: "this field is required."},
        
       
      },
       errorPlacement: function (error, element) {
            if (element.attr('name') == 'status') {

                error.appendTo(element.parent().parent());

            }else{

               error.appendTo(element.parent());
            }
        },
    });
  });

</script>
<!-- testimonials -->
<script>

  $(document).ready(function() {
    $("#testimonials").validate({
      rules: { 
        description:{ required: true},
        name:{ required: true},
        position: {required:true},
        status: {required:true},
        },
       
      messages: {
        description: { required: "this field is required."},
        name: { required: "this field is required."},
        position: { required: "this field is required."},
        status: { required: "this field is required."},
        
       
      },
       errorPlacement: function (error, element) {
            if (element.attr('name') == 'status') {

                error.appendTo(element.parent().parent());

            }else{

               error.appendTo(element.parent());
            }
        },
    });
  });

</script>
<!-- testimonialsupdate" -->
<script>

  $(document).ready(function() {
    $("#testimonialsupdate").validate({
      rules: { 
        description:{ required: true},
        name:{ required: true},
        position: {required:true},
        status: {required:true},
        },
       
      messages: {
        description: { required: "this field is required."},
        name: { required: "this field is required."},
        position: { required: "this field is required."},
        status: { required: "this field is required."},
        
       
      },
       errorPlacement: function (error, element) {
            if (element.attr('name') == 'status') {

                error.appendTo(element.parent().parent());

            }else{

               error.appendTo(element.parent());
            }
        },
    });
  });

</script>
<!-- contactus -->

<script>

  $(document).ready(function() {
    $("#contactus").validate({
      rules: { 
        name:{ required: true,string:true},
        email:{ required: true,email:true},
        subject: {required:true,string:true},
        message: {required:true,string:true},
        },
       
      messages: {
        name: { required: "Name field is required."},
        email: { required: "this field is required."},
        subject: { required: "this field is required."},
        message: { required: "this field is required."},
        
       
      },
    });
  });

</script>
<!-- contactus update -->
<script>

  $(document).ready(function() {
    $("#contactusupdate").validate({
      rules: { 
        name:{ required: true},
        email:{ required: true,email:true},
        subject: {required:true},
        message: {required:true},
        },
       
      messages: {
        name: { required: "Name field is required."},
        email: { required: "this field is required."},
        subject: { required: "this field is required."},
        message: { required: "this field is required."},
        
       
      },
    });
  });
</script>
<!-- subscribe -->
<script>

  $(document).ready(function() {
    $("#subscribe").validate({
      rules: { 
        
        email:{ required: true,email:true}
        },
       
      messages: {
        email: { required: "this field is required."},
       
      },
    });
  });

</script>
<!-- subscribe update -->
<script>

  $(document).ready(function() {
    $("#subscribeupdate").validate({
      rules: { 
        
        email:{ required: true,email:true}
        },
       
      messages: {
        email: { required: "this field is required."},
       
      },
    });
  });

</script>
<!-- setting services -->
<script>

  $(document).ready(function() {
    $("#settings").validate({
      rules: { 
        clients:{ required: true},
        projects:{ required: true},
        hours:{ required: true},
        workers:{ required: true},
        services:{ required: true},
        description:{ required: true},
        portfolio:{ required: true},
        description2:{ required: true},
        testimonials:{ required: true},
        description3:{ required: true},
        team:{ required: true},
        description4:{ required: true},
        contact:{ required: true},
        description5:{ required: true},
        enno:{ required: true},
        description6:{ required: true},
        },
       
      messages: {
        clients: { required: "this field is required."},
        projects: { required: "this field is required."},
        hours: { required: "this field is required."},
        workers: { required: "this field is required."},
        services: { required: "this field is required."},
        description: { required: "this field is required."},
        portfolio: { required: "this field is required."},
        description2: { required: "this field is required."},
        testimonials: { required: "this field is required."},
        description3: { required: "this field is required."},
        team: { required: "this field is required."},
        description4: { required: "this field is required."},
        contact: { required: "this field is required."},
        description5: { required: "this field is required."},
        enno: { required: "this field is required."},
        description6: { required: "this field is required."},
      },
       
    });
  });

</script>
<!-- country -->
<script>

  $(document).ready(function() {
    $("#country").validate({
      rules: { 
        title:{ required: true},
        status: {required:true},
        },
       
      messages: {
        title: { required: "this field is required."},
        status: { required: "this field is required."},
        
       
      },
       errorPlacement: function (error, element) {
            if (element.attr('name') == 'status') {

                error.appendTo(element.parent().parent());

            }else{

               error.appendTo(element.parent());
            }
        },
    });
  });

</script>
<!-- country update -->

<script>

  $(document).ready(function() {
    $("#countryupdate").validate({
      rules: { 
        title:{ required: true},
        status: {required:true},
        },
       
      messages: {
        title: { required: "this field is required."},
        status: { required: "this field is required."},
        
       
      },
       errorPlacement: function (error, element) {
            if (element.attr('name') == 'status') {

                error.appendTo(element.parent().parent());

            }else{

               error.appendTo(element.parent());
            }
        },
    });
  });

</script>
<!-- state -->
<script>

  $(document).ready(function() {
    $("#state").validate({
      rules: { 
        dropdown:{ required: true},
        title:{ required: true},
        status: {required:true},
        },
       
      messages: {
        dropdown: { required: "this field is required."},
        title: { required: "this field is required."},
        status: { required: "this field is required."},
        
       
      },
       errorPlacement: function (error, element) {
            if (element.attr('name') == 'status') {

                error.appendTo(element.parent().parent());

            }else{

               error.appendTo(element.parent());
            }
        },
    });
  });

</script>
<!-- state update -->

<script>

  $(document).ready(function() {
    $("#stateupdate").validate({
      rules: { 
        country:{ required: true},
        state:{ required: true},
        status: {required:true},
        },
       
      messages: {
        country: { required: "this field is required."},
        state: { required: "this field is required."},
        status: { required: "this field is required."},
        
       
      },
       errorPlacement: function (error, element) {
            if (element.attr('name') == 'status') {

                error.appendTo(element.parent().parent());

            }else{

               error.appendTo(element.parent());
            }
        },
    });
  });

</script>
<!-- city -->
<script>

  $(document).ready(function() {
    $("#city").validate({
      rules: { 
        dropdown:{ required: true},
        state:{ required: true},
        city:{ required: true},
        status: {required:true},
        },
       
      messages: {
        dropdown: { required: "country field is required."},
        state: { required: "state field is required."},
        city: { required: "city field is required."},
        status: { required: "status field is required."},
        
       
      },
       errorPlacement: function (error, element) {
            if (element.attr('name') == 'status') {

                error.appendTo(element.parent().parent());

            }else{

               error.appendTo(element.parent());
            }
        },
    });
  });

</script>
<!-- city update -->

<script>

  $(document).ready(function() {
    $("#cityupdate").validate({
      rules: { 
        country:{ required: true},
        state: {required:true},
        title: {required:true},
        status: {required:true},
        },
       
      messages: {
        country: { required: "this field is required."},
        state: { required: "this field is required."},
        title: { required: "this field is required."},
        status: { required: "this field is required."},
        
       
      },
       errorPlacement: function (error, element) {
            if (element.attr('name') == 'status') {

                error.appendTo(element.parent().parent());

            }else{

               error.appendTo(element.parent());
            }
        },
    });
  });

</script>

<!-- portfolio -->
<script>

  $(document).ready(function() {
    $("#portfolio").validate({
      rules: { 
        image:{ required: true},
        },
       
      messages: {
        image: { required: "please upload image."},
      },
       

       errorPlacement: function (error, element) {
            if (element.attr('name') == 'status') {

                error.appendTo(element.parent().parent());

            }else{

               error.appendTo(element.parent());
            }
        },
    });
  });

</script>
</body>
</html>