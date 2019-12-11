<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	
</head>
<body>

<fieldset>
	<legend>Add product</legend>
	<center>
    <a href="<?php echo e(route('employee.index')); ?>">Back</a> | 
	<a href="<?php echo e(route('employee.update')); ?>">Update Product</a> | 
    <a href="/logout">Log Out</a> | 
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
			<td>Quantity:</td>
			<td><input type="text" name="quantity" value="<?php echo e(old('quantity')); ?>"></td>
		</tr>
        
		<tr>
			<td>Price:</td>
			<td><input type="text" name="price" value="<?php echo e(old('price')); ?>"></td>
		</tr>

		<tr>
			<td colspan="2"><center><input type="submit" name="submit" value="Add Product"></center></td>
		</tr>
	</table>
	</form>
    </center>
</fieldset>
</body>
</html>