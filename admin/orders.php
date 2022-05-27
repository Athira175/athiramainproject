


<?php
require('top.inc.php');


if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update categories set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from categories where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script src = "https://code.jquery.com/jquery-3.5.1.js"> </script>
<script src = "https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"> </script>
<link rel = "stylesheet" href = "https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="css/datatables/datatables.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				<!--<h4 class="box-title">Sellers </h4>
				   <h4 class="box-link"><a href="add_seller.php">Add Sellers</a> </h4>
				   <input id="myInput" type="text" placeholder="Search..">-->
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					   <div class = "table-responsive">
					  <table id="product_table" class="table ">
						 <thead>
							<tr>
							   <!--<th class="serial"></th>-->
						 		   <!--<th>ID</th>-->
									<th>
                          Party Size
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                         Address
                        </th>
                        <th>
                         District
                        </th>
						<th>
                         Date
                        </th>
						<th>
                         Total Amount
                        </th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;


							$res=mysqli_query($con,"select * from reserve where status=1");
										while($row=mysqli_fetch_assoc($res)){
											?>
											<tr>
											   <!--<td>
												  <?php echo($row['id']); ?>
											   </td>-->
											   <td><?php echo $row['psize'] ?></td>
                              <td><?php echo $row['FName'] ?></td>
                              <td><?php echo $row['Email'] ?></td>
                              <td><?php echo $row['Adrs'] ?></td>
                              <td><?php echo $row['dist'] ?></td>
							  <td><?php echo $row['cin'] ?></td>	
							  <td><?php echo $row['amount'] ?></td>
							<?php } ?>
								
							
							</tr>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
</html>
<script>
$(document).ready(function() {
    $('#product_table').DataTable( {
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    } );
} );
</script>
<?php
require('footer.inc.php');
?>