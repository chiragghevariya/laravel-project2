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
  <h2>Setting Form</h2>
  <form action="{{route('setting.update-add')}}" method="POST" id="copyright">
    
    @csrf

    <div class="form-group">
      <label >Copyright:</label>
      <input type="text" class="form-control" value="{{$editdata->copyright}}" id="copyright" placeholder="Enter Copyright" name="copyright">
    </div>

    <div class="form-group">
    <label >Status:</label>
    <select class="form-control"  name="status" id="status">
      <option value="">select status</option>
      <option value="1" @if($editdata->status == 1) selected @endif >Active</option>
      <option value="2" @if($editdata->status == 2) selected @endif >Inactive</option>
    </select>
   </div>

    <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{route('newslater.listing-newslater')}}" class="btn btn-danger">Cancle</a>
</form>
</div>

 @endsection
            

</body>
</html>
