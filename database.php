<?php 
include 'dbconnect.php';
?>
<div class="container"> <h2>Cybercount database</h2>
<table class="table table-hover  table-bordered">
	 <caption>List of users</caption>
	 <thead>
	<tr>
	    <th>Id</th>
		<th>Title Date</th>
		<th>Start Date</th>
		<th>End Date</th>
		<th>Count Type</th>
	</tr>
</thead>
	<?php 
	$data = mysqli_query($connection, "select * from $table");
	if (!$data) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
	while($d=mysqli_fetch_array($data)){
		if (!preg_match('/^Count Up/', $d['countype']))
{

	?><tbody>
	<tr class="table-danger">
		<td><?php echo $d['id'] ?></td>
		<td><?php echo $d['title'] ?></td>
		<td><?php echo $d['startdate'] ?></td>
		<td><?php echo $d['enddate'] ?></td>
		<td><?php echo $d['countype'] ?></td>
	</tr>
	<?php }else{ ?>
<tr class="table-success">
		<td><?php echo $d['id'] ?></td>
		<td><?php echo $d['title'] ?></td>
		<td><?php echo $d['startdate'] ?></td>
		<td><?php echo $d['enddate'] ?></td>
		<td><?php echo $d['countype'] ?></td>
	</tr>
</tbody>
		<?php
	} } ?>
</table>
</div>

