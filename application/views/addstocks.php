<!DOCTYPE html>



<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>EDIT ITEM</title>

</head>

<body>

<form method="post" action="<?php echo base_url();?>index.php/users/addstocks">
<?php
extract ($user);
?>
<table width="400" border="0" cellpadding="5">

<tr>

<th >Item Code</th>

<td width="161"><input type="text" name="name" size="20" value="<?php echo $name; ?>" /></td>

</tr>

<tr>

<th>Item Name</th>

<td><input type="text" name="email" size="20" value="<?php echo $email; ?>" /></td>

</tr>

<tr>

<th>Number of Stocks</th>

<td><input type="text" name="mobile" size="20" value="<?php echo $mobile; ?>" /></td>

</tr>

<tr>

<th>Price</th>

<td><textarea name="address" rows="5" cols="20"><?php echo $address; ?></textarea></td>

</tr>

<tr>

<th align="right" scope="row">&nbsp;</th>

<td>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" name="submit" value="Update" /></td>

</tr>

</table>

</form>

</body>

</html>