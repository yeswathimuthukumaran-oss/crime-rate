<?php
include('header.php');
?>

   <?php
error_reporting(0);
?>

 <style>
table, th, td {
  border: 0px solid black;
}

th, td {
  padding: 10px;
}
</style>
  <div class="container marketing">

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"> </h2> 
			

      <form method="post" action="crimerpt.php" enctype="multipart/form-data">
							
							<table width="100%" class="rep">
							
				<tr style="background-color:#999999">
				<td>Id</td>
				<td>Area Name</td>
				<td>Name</td>
				<td>Gender</td>
				<td>Idendification Mark</td>
				<td>Photo </td>
				
				</tr>
				<?php
				
				
                                $query = "SELECT distinct * FROM criminaltable ";
                                $result = mysqli_query($con,$query);
								if($result)
								{
								
	                       while ($row = mysqli_fetch_array($result))
	                       {
						echo "
				<tr>
				
				
				
				<td>$row[1]</td>
				
				
				<td>$row[2]</td>
				
				<td>$row[3]</td>
				
			
				<td>$row[4]</td>
				<td>$row[5]</td>
				<td><img src='../admin/$row[6]' width='100px'></td>
				 
				</tr>";   
	        
				}
				}
				
			
				?>
				</table>
				</form>
				
		
            </div>
            

			
			
        </div><?php
include('footer.php');
?>