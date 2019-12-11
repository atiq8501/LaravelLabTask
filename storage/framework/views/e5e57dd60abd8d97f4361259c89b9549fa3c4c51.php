<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
	
</head>
<body>
<center>
<a href="<?php echo e(route('admin.index')); ?>">Back</a> | 
	<a href="<?php echo e(route('admin.add')); ?>">abc</a> | 
    <a href="/logout">Log Out</a> | 
<fieldset>
	<legend>Add Employee</legend>

	<form method="post" >
		<!-- @csrf  -->
		<!-- <?php echo e(csrf_field()); ?> -->
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<table>

       <tr>
			<td>Name:</td>
			<td><input type="text" name="name" value="<?php echo e(old('name')); ?>"></td>
		</tr>

        <tr>
			<td>Contact:</td>
			<td><input type="text" name="contact" value="<?php echo e(old('contact')); ?>"></td>
		</tr>
        
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" value="<?php echo e(old('username')); ?>"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" value="<?php echo e(old('password')); ?>"></td>
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