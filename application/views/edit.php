<!DOCTYPE html>



<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>EDIT ITEM</title>

</head>

<body>



<script>
			$(function() {
			$("#price, #quantity").on("keydown keyup", product);
			function product() {
			$("#prod").val(Number($("#price").val()) * Number($("#quantity").val()));
			}
			});

		
 </script>




<form method="post" action="<?php echo base_url();?>index.php/users/update">
<?php
extract ($user);
?>
<div class="container">
<h2>ADD STOCKS</h2>
<table class="table table-striped table-bordered" width="50" border="5" cellpadding="5">

<tr>

<th >Item Code</th>

<td width="161"><input type="text" name="code" size="20" value="<?php echo $code; ?>" readonly/></td>

</tr>

<tr>

<th>Item Name</th>

<td><input type="text" name="name" size="20" value="<?php echo $name; ?>" readonly/></td>

</tr>

<tr>

<th>Number of Stocks</th>

<td><input type="number" name="stocks" size="20" min="<?php echo $stocks; ?>" value="<?php echo $stocks; ?>" /></td>

</tr>

<tr>

<th>Price</th>

<td><input type="number" step="any" name="price" size="20" value="<?php echo $price; ?>" readonly//></td>

</tr>

<tr>

<th align="right" scope="row">&nbsp;</th>

<td>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<button class="btn btn-success" name="submit" value="Update" />Update</button>

</tr>

</table>

</div>
</form>








<form method="post" action="<?php echo base_url();?>index.php/users/cart">

<?php
extract ($user);
?>

<div class="container">
<h2>Cart</h2>
<table class="table table-striped table-bordered" width="50" border="5" cellpadding="5">

<tr>

<th >Item Code:</th>

<td width="161"><input type="text" name="code" size="20" value="<?php echo $code; ?>" readonly/></td>

</tr>

<tr>

<th>Item Name:</th>

<td><input type="text" name="name" size="20" value="<?php echo $name; ?>" readonly/></td>

</tr>

<tr>

<tr>

<th>Price:</th>

<td><input type="text" step="any" id="price" name="price" size="20" value="<?php echo $price; ?>" readonly//></td>

</tr>

<th>Quantity:</th>

<td><input type="number" step="any" id="quantity" name="quantity" size="20" value="<?php echo $stocks; ?>" min="1" max="<?php echo $stocks; ?>"/></td>

</tr>


<tr>

<th>Total Amount:</th>

<td><input type="text" id="prod" step="any" name="totalamount"  readonly //></td>

</tr>



<th>Payment Amount:</th>

<td><input type="number" min="0" id="paymentamount" step="any" name="paymentamount" size="20" //></td>

</tr>


<!--<td><input type="hidden" name="totalstocks" value="<?php echo $stocks - $quantity; ?>" //></td>--> 

</tr> 


<tr>

<th align="right" scope="row">&nbsp;</th>

<td>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<button class="btn btn-success" name="submit" value="Update" />Submit</button>

</tr>

</table>

</div>
</form>



</body>

</html>