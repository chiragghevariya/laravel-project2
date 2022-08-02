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
<h2>Blog listing</h2>

<div style="margin-top:20px; margin-bottom:40px;">
  <a href="{{route('blog.blog-form')}}"><h4>Add Blog Record</h4></a>
</div>

<table>

  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Description</th>
    <th>Status</th>
    <th>Action</th>
  </tr>

  @if(isset($getallblog) && !$getallblog->isEmpty())

    @foreach($getallblog as $key=>$v)

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
        <a href="{{route('blog.edit-blog',$v->id)}}">Edit</a>   <a href="">Delete</a>
      </td>
    </tr>

    @endforeach

  @endif

</table>

  @if(isset($getallblog) && !$getallblog->isEmpty())

<div style="margin-top: 40px; text-align: center;">
  
    <!-- {!! $getallblog->links() !!} -->
    {!! $getallblog->render() !!}              <!-- for pagination -->

</div>
    
  @endif

@endsection
</body>
</html>


