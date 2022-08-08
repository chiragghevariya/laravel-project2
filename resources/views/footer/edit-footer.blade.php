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
  <h2>Footer Form</h2>
  <form action="{{route('footer.save-edit-footer')}}" method="POST" id="footer" name="footer">
    
    @csrf
<input type="hidden" value="{{$editdata->id}}" name="footer">
   
    <div class="form-group">
      <label >Title:</label>
      <input type="text" class="form-control" value="{{$editdata->title}}" id="title" placeholder="Enter title" name="title">
    </div>

    <div class="form-group">
      <label >Link:</label>
      <input type="link" class="form-control" value="{{$editdata->link}}" id="link" placeholder="Enter link" name="link">
    </div>

   <div class="form-group">
    <label >Status:</label>
    <select class="form-control"  name="status" id="status">
      <option value="">select status</option>
      <option value="1" @if($editdata->status == 1) selected @endif >Active</option>
      <option value="2" @if($editdata->status == 2) selected @endif>Inactive</option>
    </select>
   </div>

    <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{route('footer.listing-footer')}}" class="btn btn-danger">Cancle</a>
</form>
</div>

<script>

  $(document).ready(function() {
    $("#footer").validate({
      rules: { 
        title: {required:true},
        link:  {required: true},
        status:  {required: true},
      },
      messages: {
        title: { required: "this field is required."},
        link: { required: "this field is required.."},
        status: { required: "this field is required.."},
     }
    });
  });
</script>
 @endsection
            

</body>
</html>
