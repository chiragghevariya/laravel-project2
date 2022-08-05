@extends('adminit.layout')

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

td {
    background-color: lightseagreen;
}
</style>
</head>
<body>

@section('blog')
<h2>Testimonial listing</h2>

<div style="margin-top:20px; margin-bottom:40px;">
  <a href="{{route('testimonial.add-testimonial')}}"><h4>Add Testimonial Record</h4></a>
</div>

<table>

  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Description</th>
    <th>Status</th>
    <th>Action</th>
  </tr>

  @if(isset($getalltestimonial) && !$getalltestimonial->isEmpty())

    @foreach($getalltestimonial as $key=>$v)

    <tr>
      <td>{{$v->id}}</td> <!-- database name -->
      <td>{{$v->title}}</td>
      <td>{{$v->description}}</td>
      <td>
      	@if($v->status == 1)
      	  active
        @else
           inactive
        @endif
    </td>
      <td>
        <a href="{{route('service.edit-service',$v->id)}}">Edit</a>   
        <a href="{{route('service.delete-service',$v->id)}}">Delete</a>
      </td>
    </tr>

    @endforeach

  @endif

</table>

  @if(isset($getalltestimonial) && !$getalltestimonial->isEmpty())

<div style="margin-top: 40px; text-align: center;">
  
    <!-- {!! $getalltestimonial->links() !!} -->
    {!! $getalltestimonial->render() !!}              <!-- for pagination -->

</div>
    
  @endif

@endsection
</body>
</html>


