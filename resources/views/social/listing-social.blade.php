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

a {
    color: white;
    text-decoration: underline;
}

</style>
</head>
<body>

@section('blog')
<h2>Social-media listing</h2>

<div style="margin-top:20px; margin-bottom:40px;">
  <a href="{{route('social.add-social')}}"><h4>Add social Record</h4></a>
</div>

<table>

  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Link</th>
    <th>icon</th>
    <th>Status</th>
    <th>Action</th>
  </tr>

  @if(isset($getallsocial) && !$getallsocial->isEmpty())

    @foreach($getallsocial as $key=>$v)

    <tr>
      <td>{{$v->id}}</td> <!-- database name -->
      <td>{{$v->title}}</td>
      <td>{{$v->link}}</td>
      <td>{{$v->icon}}</td>
      <td>
      	@if($v->status == 1)
      	  active
        @else
           inactive
        @endif
    </td>
      <td>
        <a href="{{route('social.edit-social',$v->id)}}">Edit</a>   
        <a href="{{route('social.delete-social',$v->id)}}">Delete</a>
      </td>
    </tr>

    @endforeach

  @endif

</table>

  @if(isset($getallsocial) && !$getallsocial->isEmpty())

<div style="margin-top: 40px; text-align: center;">
  
    <!-- {!! $getallsocial->links() !!} -->
    {!! $getallsocial->render() !!}              <!-- for pagination -->

</div>
    
  @endif

@endsection
</body>
</html>


