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
                <h2 class="featurette-heading">Criminal Details .</h2>
                <p class="lead" style="text-align:justify">
			
	<?php
				

         $query = "SELECT  max(id) FROM criminaltable";
                                $result = mysqli_query($con,$query);
								if($result)
								{
	                       while ($row = mysqli_fetch_array($result))
	                       {
	                   
					$id=$row[0];
					  $az= $id+1;
					   
				}
				}
				
				?>


			<form method="post" action="criminal.php" enctype="multipart/form-data"> 
				<table>
				<tr>
				<td>ID</td>
				<td><input type="text" name="t1" required  value="<?php echo $az; ?>"  /></td>
				</tr>
				<tr>
				<td>Area  Name</td>
				<td>  
<select name="t2">
<option value="0">Select Area</option>
<option value="ARIYALUR">ARIYALUR</option>
<option value="CHENNAI CITY">CHENNAI CITY</option>
<option value="CHENNAI RAILWAYS">CHENNAI RAILWAYS</option>
<option value="COIMBATORE">COIMBATORE</option>
<option value="COIMBATORE CITY">COIMBATORE CITY</option>
<option value="CUDDALORE">CUDDALORE</option>
<option value="DHARMAPURI">DHARMAPURI</option>
<option value="DINDIGUL">DINDIGUL</option>
<option value="ERODE">ERODE</option>
<option value="KANCHEEPURAM">KANCHEEPURAM</option>
<option value="KANYAKUMARI">KANYAKUMARI</option>
<option value="KARUR">KARUR</option>
<option value="KRISHNAGIRI">KRISHNAGIRI</option>
<option value="MADURAI">MADURAI</option>
<option value="MADURAI CITY">MADURAI CITY</option>
<option value="NAGAPATTINAM">NAGAPATTINAM</option>
<option value="NAMAKKAL">NAMAKKAL</option>
<option value="NILGIRIS">NILGIRIS</option>
<option value="PERAMBALUR">PERAMBALUR</option>
<option value="PUDUKKOTTAI">PUDUKKOTTAI</option>
<option value="RAMANATHAPURAM">RAMANATHAPURAM</option>
<option value="SALEM">SALEM</option>
<option value="SALEM CITY">SALEM CITY</option>
<option value="SIVAGANGAI">SIVAGANGAI</option>
<option value="THANJAVUR">THANJAVUR</option>
<option value="THENI">THENI</option>
<option value="THOOTHUKUDI">THOOTHUKUDI</option>
<option value="TIRUNELVELI">TIRUNELVELI</option>
<option value="TIRUNELVELI CITY">TIRUNELVELI CITY</option>
<option value="TIRUPPUR">TIRUPPUR</option>
<option value="TIRUPPUR CITY">TIRUPPUR CITY</option>
<option value="TIRUVALLUR">TIRUVALLUR</option>
<option value="TIRUVANNAMALAI">TIRUVANNAMALAI</option>
<option value="TIRUVARUR">TIRUVARUR</option>
<option value="TRICHY">TRICHY</option>
<option value="TRICHY CITY">TRICHY CITY</option>
<option value="TRICHY RAILWAYS">TRICHY RAILWAYS</option>
<option value="VELLORE">VELLORE</option>
<option value="VILLUPURAM">VILLUPURAM</option>
<option value="VIRUDHUNAGAR">VIRUDHUNAGAR</option>
</select>
</td>
				</tr>
				
				<tr>
				<td>   Name</td>
				<td><input type="text" name="t3" required pattern="[a-zA-Z]+" /></td>
				</tr>
				<tr>
				<td> Gender  </td>
				<td> 
				<select name="t4">
<option>Select Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Transgender">Transgender</option>
</select>
				</td>
				</tr>
				
				
				<tr>
				<td>Identification Mark </td>
				<td><textarea  rows="4" cols="17" name="t5" required></textarea>  </td>
				</tr>
				 		<tr>
				<td>Photo </td>
				<td><input type="file" name="photo" required  /></td>
				</tr>	 			 
				 <tr>
				<td>Accused </td>
				<td><input type="text" name="t6" required  /></td>
				</tr>	
				<tr>
	<td><input type="submit" value="submit" name="submit"/></td>
	<td><input type="reset" value="Cancel" name="Cancel"/></td>
	</tr>
				</table>
				</form>
				
 </p>
            </div>
            <?php
if($_POST['submit']=="submit")
{
$a1=$_POST['t1'];
$b1=$_POST['t2'];
$c1=$_POST['t3'];
$d1=$_POST['t4'];
$e1=$_POST['t5'];
$f1=$_POST['t6'];


$target_path = "uploads/";

$fl="0";
$target_path = $target_path . basename( $_FILES['photo']['name']); 
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['photo']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}


$ins=mysqli_query($con,"insert into criminaltable values('','$a1','$b1','$c1','$d1','$e1','$target_path','$f1')");
echo "<script> alert('Criminal Details Registered successfully');</script>";
}
?>
        </div><?php
include('footer.php');
?>