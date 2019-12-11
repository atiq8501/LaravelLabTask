<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
	
</head>
<body>
<center>
<a href="{{route('admin.index')}}">Back</a> | 
	<a href="{{route('admin.add')}}">abc</a> | 
    <a href="/logout">Log Out</a> | 
<fieldset>
	<legend>Add Employee</legend>

	<form method="post" >
		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>

       <tr>
			<td>Name:</td>
			<td><input type="text" name="name" value="{{old('name')}}"></td>
		</tr>

        <tr>
			<td>Contact:</td>
			<td><input type="text" name="contact" value="{{old('contact')}}"></td>
		</tr>
        
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" value="{{old('username')}}"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" value="{{old('password')}}"></td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" name="submit" value="Add Employee"></center></td>
			
		</tr>

	</table>
	</form>

    
</fieldset>
</center>
</body>
</html>