<!DOCTYPE html>
<html>
<head>
	<title>Employee Index</title>
</head>
<body>
	<a href="<?php echo e(route('employee.add')); ?>">Add Product</a> | 
	<a href="<?php echo e(route('employee.view')); ?>">View Product</a> | 
	<a href="<?php echo e(route('employee.update')); ?>">Update Product</a> | 
	<a href="/logout">logout</a>
</body>
</html>