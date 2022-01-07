<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	
</head>
<body text="black">
	<form method="post" action="{{route('updates')}}">
		@csrf
		<input type="hidden" name="id" value="{{$view->id}}">
		<table border="2" height="550" width=200 align="center">
			<tr>
				<td colspan="2" align="center">Regestration Form</td>
			</tr>
			<tr>
				<td height="50">name</td>
				<td><input type="text" name="name" value="{{$view->name}}"></td>
			</tr>
			<tr>
				<td height="50">Password</td>
				<td><input type="password" name="password" value="{{$view->password}}"></td>
			</tr>
			<tr>
				<td height="50">Hobby</td> 
				<td><input type="checkbox" name="hobby[]" value="play" @if('hobby') checked @endif>Play <input type="checkbox" name="hobby[]" value="read" @if('hobby') checked @endif>Read</td>
			</tr>
			
			<tr>
				<td height="20" width="20">{{ __('Gender') }}</td>
                       <td><input type="radio" name="gender" value="male" @if(old('gender',$view->gender)=="male") checked @endif>male
                       <input type="radio" name="gender" value="female" @if(old('gender',$view->gender)=="female") checked @endif>female </td>
			</tr>
			
			<tr>
				<td height="50">city</td>
				<td><select name="city">
					<option value="{{$view->city}}" {{($view->city == 'rajkot'?'selected':'')}}>Rajkot</option>
   					<option value="{{$view->city}}" {{($view->city == 'ahamdabad'?'selected':'')}}>Ahamdabad</option>
					<option value="{{$view->city}}" {{($view->city == 'baroda'?'selected':'')}}>Baroda</option>
				</select>
			</td>
			</tr>
			
			<tr>
				<td height="50"></td>
				<td><input type="submit" name="submit" value="save"></td>
			</tr>
		</table>
	</form>


</body>
</html>