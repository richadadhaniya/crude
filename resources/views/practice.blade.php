<!-------------
Author Name:richa
Start Date:18/10/2021
End Date:
Modify By:
Modify Date:
Loggical Comment:javascript
------------>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	
</head>
<body text="black">
	<form method="post" action="{{route('store')}}">
		@csrf
		<table border="2" height="550" width=200 align="center">
			<tr>
				<td colspan="2" align="center">Regestration Form</td>
			</tr>
			<tr>
				<td height="50">name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td height="50">Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td height="50">Hobby</td>
				<td><input type="checkbox" name="hobby[]" value="play">Play <input type="checkbox" name="hobby[]" value="read">Read</td>
			</tr>
			
			<tr>
				<td height="50">{{ __('Gender') }}	</td>
				<td><input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">Female</td>
			</tr>
			
			<tr>
				<td height="50">city</td>
				<td><select name="city">
					<option disabled selected>--select--</option>
					<option value="rajkot">rajkot</option>
					<option value="ahamdabad">ahamdabad</option>
					<option value="baroda">baroda</option>
					
				</select>
			</td>
			</tr>
			
			<tr>
				<td height="50"></td>
				<td><input type="submit" name="submit" value="save">
					
				</td>
			</tr>
		</table>
	</form>


</body>
</html>