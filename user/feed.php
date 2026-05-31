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
                <h2 class="featurette-heading">Welcome to Indian Police Service.</h2> <br> 
				<h3> <u>Feedback</u></h3>
                <p class="lead" style="text-align:justify">
			 
				
				<form method="post" action="feed.php">
				<table>
				
				 
				
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
				<td>  Name</td>
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
				<td>Father Name</td>
				<td><input type="text" name="t5" required   /></td>
				</tr>
				
				<tr>
				<td>Date of Birth </td>
				<td> <input type="date" name="t6" required />  </td>
				</tr>
				
				
				 
				<tr>
				<td> Mobile Number </td>
				<td><input type="text" name="t8" required pattern="[0-9]{10,10}" maxlength="10" /></td>
				</tr>
				
				<tr>
				<td> 	E-Mail ID </td>
				<td><input type="mail" name="t9" required   /></td>
				</tr>
				
				
				 
 
				 
				<tr>
				<td>Feedback</td>
				<td> <textarea  type="text" name="t13" required pattern="[a-zA-Z]+" /></textarea> </td>
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
 
$a2=$_POST['t2'];
$b2=$_POST['t3'];
$c2=$_POST['t4'];
$d2=$_POST['t5'];

$e2=$_POST['t6'];
 
$f2=$_POST['t8'];
$g2=$_POST['t9'];
 
$h2=$_POST['t13'];


$ins=mysqli_query($con,"insert into feedtable values('','$a2','$b2','$c2','$d2','$e2','$f2','$g2','$h2')");
echo "<script> alert('Feedback Registered successfully');</script>";
}
?>
        </div><?php
include('footer.php');
?>