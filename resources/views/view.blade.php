<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<table border="1" align="center" width="400px" height="400px">

		<thead>
			<tr>
				<td>
				<button type="submit" name="submit" class="btn btn-info"><a href="{{route('view')}}"> Add </a></button>
			</td>
			</tr>
		<tr>
			<td><b>Name</b></td>
			<td><b>Password</b></td>
			<td><b>Hobby</b></td>
			<td><b>Gender</b></td>
			<td><b>City</b></td>
			<td><b>Action</b></td>
		</tr>
	</thead>
	<tbody>
		@foreach($view as $view)
		<tr>
			<td>{{$view->name}}</td>
			<td>{{$view->password}}</td>
			<td>{{$view->hobby}}</td>
			<td>{{$view->gender}}</td>
			<td>{{$view->city}}</td>

			<td>
				
				<a href="{{route('edits',$view->id)}}"class="btn btn-success" >Edit</a>&nbsp;&nbsp;
                <a href="{{route('delete',$view->id)}}"class="btn btn-danger" >Delete</a>&nbsp;&nbsp;
			</td>
		</tr>
		@endforeach
		
		</tbody>
		</table>
</body>
</html>