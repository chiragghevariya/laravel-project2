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
<h2>Service listing</h2>

<div style="margin-top:20px; margin-bottom:40px;">
  <a href="{{route('service.add-service')}}"><h4>Add service Record</h4></a>
</div>

<table>

  <tr>
    <th>Id</th>
    <th>Icon</th>
    <th>Title</th>
    <th>Description</th>
    <th>Status</th>
    <th>Action</th>
  </tr>

  @if(isset($getallservice) && !$getallservice->isEmpty())

    @foreach($getallservice as $key=>$v)

    <tr>
      <td>{{$v->id}}</td> <!-- database name -->
      <td>{{$v->icon}}</td>
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

  @if(isset($getallservice) && !$getallservice->isEmpty())

<div style="margin-top: 40px; text-align: center;">
  
    <!-- {!! $getallservice->links() !!} -->
    {!! $getallservice->render() !!}              <!-- for pagination -->

</div>
    
  @endif

@endsection
</body>
</html>


