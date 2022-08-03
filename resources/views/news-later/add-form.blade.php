@extends('adminit.layout')

<!DOCTYPE html>
<html lang="en">
<head>

	<style>
		form {
		   margin-top: 27px;
		}

		.card.card-primary {
		    margin-top: 40px;
		}
			</style>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="{{asset('theme/jquery.validate.min.js')}}"></script>     
  <script src="{{asset('theme/additional-methods.min.js')}}"></script>
</head>
<body>

	@section('blog')

<div class="container">
  <h2>News later Form</h2>
  <form action="{{route('newslater.save-add-newslater')}}" method="POST" id="newslater">
    
    @csrf

    <div class="form-group">
      <label >Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{route('newslater.listing-newslater')}}" class="btn btn-danger">Cancle</a>
</form>
</div>

<script>

  $(document).ready(function() {
    $("#newslater").validate({
      rules: { 
        email: {required:true},
      },

      messages: {
        email: { required: "this field is required."},
      }
    });
  });
</script>
 @endsection
            

</body>
</html>
