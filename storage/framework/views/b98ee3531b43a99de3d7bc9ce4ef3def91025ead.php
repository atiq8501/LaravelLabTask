<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	
</head>
<body>

<fieldset>
	<legend>Registration</legend>
	<form method="post" >
		<!-- @csrf  -->
		<!-- <?php echo e(csrf_field()); ?> -->
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<table>

       <tr>
			<td>Name:</td>
			<td><input type="text" name="name"></td>
		</tr>

        <tr>
			<td>Contact:</td>
			<td><input type="text" name="contact"></td>
		</tr>
        
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Registration"></td>
			<td></td>
		</tr>


        <tr>
			<td colspan="2">If You already have account
            <a href="/login">Click Here </a> to Login </td>
		</tr>
	</table>
	</form>
</fieldset>
</body>
</html>