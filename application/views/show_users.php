<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url('assests/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assests/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

<title>TRAINING CI CRUD</title>


<style>
#showAddForm {
    width: 100%;
    padding: 50px 0;
    text-align: center;
    margin-top:20px;
    display: none;
}

#showEditForm {
    width: 100%;
    padding: 50px 0;
    text-align: center;
    margin-top:20px;
    display: none;
}

</style>





  <script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
  <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>



<script type="text/javascript">
  $(document).ready(function(){
    $('#myTable').DataTable();
});


function show_confirm(act,gotoid)
{
	if(act=="edit")
	{
		var r =confirm("Edit Quantity ?");
	}
   		else
		{
		var r=confirm("Delete Item?");
		}


	if (r==true)
	{
		window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
	}

}

function showHide() 
{
    var x = document.getElementById('showAddForm');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}

function showHide2() 
{
    var x = document.getElementById('showEditForm');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}


</script>

</head>

<body>

<h2> <center>  Item Tables </center> </h2>


<!--SHOW ADD FORM-->
<div id="showAddForm">
<<<<<<< HEAD
<form method="post"  action="<?php echo base_url();?>index.php/users/insert_new_user">
=======
<form method="post" action="<?php echo base_url();?>index.php/users/insert_new_user">
>>>>>>> e6e88d6e97e9e750659d5929c1f29702ad24f3fe

<table id="table_id"  class="table table-striped table-bordered" cellspacing="0" width="100%">

<tr>

<<<<<<< HEAD
<th width="213" align="right" scope="row">Item Code</th>

<td width="161"><input type="text" name="code" size="20" required /></td>
=======
<th width="213" align="right" scope="row">Enter your username</th>

<td width="161"><input type="text" name="name" size="20" /></td>
>>>>>>> e6e88d6e97e9e750659d5929c1f29702ad24f3fe

</tr>

<tr>
<<<<<<< HEAD

<th align="right" scope="row">Item Name</th>
=======

<th align="right" scope="row">Enter your email</th>

<td><input type="email" name="email" size="20" /></td>
>>>>>>> e6e88d6e97e9e750659d5929c1f29702ad24f3fe

<td><input type="text" name="name" size="20" required/></td>

<<<<<<< HEAD
</tr>

<tr>

<th align="right" scope="row">Number of Stocks</th>

<td><input type="number" min="0" name="stocks" size="20" required/></td>
=======
<tr>

<th align="right" scope="row">Enter your Mobile</th>

<td><input type="text" name="mobile" size="20" /></td>
>>>>>>> e6e88d6e97e9e750659d5929c1f29702ad24f3fe

</tr>

<tr>

<<<<<<< HEAD
<th align="right" scope="row">Price</th>

<td><input type="number" name="price" min="0" step="any" name="price" rows="5" cols="20" required></textarea></td>
=======
<th align="right" scope="row">Enter Your Address</th>

<td><textarea name="address" rows="5" cols="20"></textarea></td>
>>>>>>> e6e88d6e97e9e750659d5929c1f29702ad24f3fe

</tr>

<tr>

<th align="right" scope="row">&nbsp;</th>

<<<<<<< HEAD
<td><input type="submit" class="btn btn-success" name="submit" value="Submit" /></td>
=======
<td><input type="submit" name="submit" value="Send" /></td>
>>>>>>> e6e88d6e97e9e750659d5929c1f29702ad24f3fe

</tr>

</table>
</form>
</div>
<!--END-->


<<<<<<< HEAD
<table id="table_id" class="table table-striped table-bordered" width="100%">
<td colspan="7" align="right"> <button class="btn btn-info" value="Insert Users" onClick= "showHide()" >Add Item</a></td>
<tr>

<th>Id</th>

<th>Item Code</th>

<th>Item Name</th>

<th>Number of Stocks</th>

<th>Price</th>

<th>Action</th>
=======
 <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
<td colspan="7" align="right"> <input type="button" value="Insert Users" onClick= "showHide()" ></a></td>
<tr>

<th scope="col">Id</th>

<th scope="col">User Name</th>

<th scope="col">Email</th>

<th scope="col">Mobile</th>

<th scope="col">Address</th>

<th scope="col">Action</th>
>>>>>>> e6e88d6e97e9e750659d5929c1f29702ad24f3fe


</tr>

<?php foreach ($user_list as $u_key){ ?>

<tr>

<td><?php echo $u_key->id; ?></td>

<<<<<<< HEAD
<td><?php echo $u_key->code; ?></td>

<td><?php echo $u_key->name; ?></td>

<td><?php echo $u_key->stocks; ?></td>

<td><?php echo $u_key->price; ?></td>

<td width="40" align="left" >

<button class="btn btn-warning" onClick="show_confirm('edit',<?php echo $u_key->id;?>)">Edit Item</button>

<!-- <a href="#" onClick="show_confirm('edit',<?php echo $u_key->id;?>)">Edit</a> -->

<button class="btn btn-danger" onClick="show_confirm('delete',<?php echo $u_key->id;?>)">Delete Item</button>
=======
<td><?php echo $u_key->name; ?></td>

<td><?php echo $u_key->email; ?></td>

<td><?php echo $u_key->address; ?></td>

<td><?php echo $u_key->mobile; ?></td>

<td width="40" align="left" >

<input type="button" value="Edit" onClick= "showHide2('edit',<?php echo $u_key->id;?>)" >

<!-- <a href="#" onClick="show_confirm('edit',<?php echo $u_key->id;?>)">Edit</a> -->

<input type="button" value="Delete" onClick="show_confirm('delete',<?php echo $u_key->id;?>)">
>>>>>>> e6e88d6e97e9e750659d5929c1f29702ad24f3fe

</td>

</tr>


<?php }?>



</table>









<!--SHOW EDIT FORM (NOT YET FUNCTIONING)-->
<div id="showEditForm">
<form method="post" action="<?php echo base_url();?>index.php/users/update">
<?php
extract ($user);
?>
<table width="400" border="0" cellpadding="5">

<tr>

<th width="213" align="right" scope="row">Enter your username</th>

<td width="161"><input type="text" name="name" size="20" value="<?php echo $name; ?>" /></td>

</tr>

<tr>

<th align="right" scope="row">Enter your email</th>

<td><input type="text" name="email" size="20" value="<?php echo $email; ?>" /></td>

</tr>

<tr>

<th align="right" scope="row">Enter your Mobile</th>

<td><input type="text" name="mobile" size="20" value="<?php echo $mobile; ?>" /></td>

</tr>

<tr>

<th align="right" scope="row">Enter Your Address</th>

<td><textarea name="address" rows="5" cols="20"><?php echo $address; ?></textarea></td>

</tr>

<tr>

<th align="right" scope="row">&nbsp;</th>

<td>
<td>ID</td>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" name="submit" value="Update" /></td>

</tr>

</table>

</form>
<!--END-->



</body>

</html>
