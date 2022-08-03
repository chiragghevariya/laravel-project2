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
<h2>News later listing</h2>

<div style="margin-top:20px; margin-bottom:40px;">
  <a href="{{route('newslater.add-newslater')}}"><h4>Add Newslater Record</h4></a>
</div>

<table>

  <tr>
    <th>Id</th>
    <th>Email</th>
    <th>Action</th>
  </tr>

  @if(isset($getnewsdata) && !$getnewsdata->isEmpty())

    @foreach($getnewsdata as $key=>$v)

    <tr>
      <td>{{$v->id}}</td> <!-- database name -->
      <td>{{$v->email}}</td>
     
      
      <td>
        <a href="{{route('newslater.edit-newslater',$v->id)}}">Edit</a>   
        <a href="{{route('newslater.delete-newslater',$v->id)}}">Delete</a>
      </td>
    </tr>

    @endforeach

  @endif

</table>

  @if(isset($getnewsdata) && !$getnewsdata->isEmpty())

<div style="margin-top: 40px; text-align: center;">
  
    <!-- {!! $getnewsdata->links() !!} -->
    {!! $getnewsdata->render() !!}              <!-- for pagination -->

</div>
    
  @endif

@endsection
</body>
</html>


