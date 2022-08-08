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
<h2>Footer listing</h2>

<div style="margin-top:20px; margin-bottom:40px;">
  <a href="{{route('footer.add-footer')}}"><h4>Add footer Record</h4></a>
</div>

<table>

  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Link</th>
    <th>Status</th>
    <th>Action</th>
  </tr>

  @if(isset($getallfooter) && !$getallfooter->isEmpty())

    @foreach($getallfooter as $key=>$v)

    <tr>
      <td>{{$v->id}}</td> <!-- database name -->
      <td>{{$v->title}}</td>
      <td>{{$v->link}}</td>
      <td>
      	@if($v->status == 1)
      	  active
        @else
           inactive
        @endif
    </td>
      <td>
        <a href="{{route('footer.edit-footer',$v->id)}}">Edit</a>   
        <a href="{{route('footer.delete-footer',$v->id)}}">Delete</a>
      </td>
    </tr>

    @endforeach

  @endif

</table>

  @if(isset($getallfooter) && !$getallfooter->isEmpty())

<div style="margin-top: 40px; text-align: center;">
  
    <!-- {!! $getallfooter->links() !!} -->
    {!! $getallfooter->render() !!}              <!-- for pagination -->

</div>
    
  @endif

@endsection
</body>
</html>


