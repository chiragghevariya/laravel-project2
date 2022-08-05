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
  <h2>Service Form</h2>
  <form action="{{route('service.save-add-service')}}" method="POST" id="service">
    
    @csrf

    <div class="form-group">
      <label >Icon:</label>
      <input type="text" class="form-control" id="icon" placeholder="Enter icon" name="icon">
    </div>

    <div class="form-group">
      <label >Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>

    <div class="form-group">
      <label >Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
    </div>

   <div class="form-group">
    <label >Status:</label>
    <select class="form-control"  name="status" id="status">
      <option value="">select status</option>
      <option value="1">Active</option>
      <option value="2">Inactive</option>
    </select>
   </div>

    <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{route('service.listing-service')}}" class="btn btn-danger">Cancle</a>
</form>
</div>

<script>

  $(document).ready(function() {
    $("#service").validate({
      rules: { 
        icon: {required:true},
        title: {required:true},
        title: {required:true},
        description:  {required: true},
        status:  {required: true},
      },
      messages: {
        icon: { required: "this field is required."},
        title: { required: "this field is required."},
        description: { required: "this field is required.."},
        status: { required: "this field is required.."},
     }
    });
  });
</script>
 @endsection
            

</body>
</html>
