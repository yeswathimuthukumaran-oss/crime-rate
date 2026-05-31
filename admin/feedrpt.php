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

  padding: 1px;
}
</style>
  <div class="container marketing">

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"> Feedback Details  </h2> 
			

      <form method="post" action="complrpt.php" enctype="multipart/form-data">
							
							<table style="width:100%" class="rep">
							
				<tr style="background-color:#999999">
				 
				<td>Area Name</td>
				<td>Name</td>
				<td>Gender </td>
				<td>Father Name</td>
				 <td>Date of Birth</td>
				 
				<td>Mobile</td>
				<td>Mail Id</td>
				 
				<td>Description</td>
				
				</tr>
				
			 
				
				<?php
				
				
                                $query = "SELECT distinct * FROM feedtable ";
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
				<td>$row[6]</td>
				<td>$row[7]</td>
				<td>$row[8]</td>
				<td>$row[9]</td>
				 
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