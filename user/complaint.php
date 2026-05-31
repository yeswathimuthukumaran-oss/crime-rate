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
				<h3> <u>Add Your Complaint Here </u></h3>
                <p class="lead" style="text-align:justify">
				<?php
				
 
         $query = "SELECT  max(firno) FROM complainttable";
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
				
				<form method="post" action="complaint.php">
				<table>
				
				<tr>
				<td>FIR NO</td>
				<td><input type="text" name="t1" required  value="<?php echo $az; ?>"></td>
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
				<td><input type="text" name="t5" required pattern="[a-zA-Z]+" /></td>
				</tr>
				
				<tr>
				<td>Date of Birth </td>
				<td> <input type="date" name="t6" required />  </td>
				</tr>
				
				
				<tr>
				<td>Address</td>
				<td><textarea  rows="4" cols="17" name="t7" required></textarea>  </td>
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
				<td> Subject </td>
				<td><select name="t10">
<option value="0">Select Subject</option>
<option value="PERSON MISSING">PERSON MISSING (நபர் காணவில்லை)</option>
<option value="VEHICLE MISSING / THEFT">VEHICLE MISSING / THEFT (வாகனம் காணவில்லை / திருட்டு)</option>
<option value="CELL PHONE MISSING / THEFT">CELL PHONE MISSING / THEFT (செல்போன் காணவில்லை / திருட்டு)</option>
<option value="JEWEL SNATCHING / THEFT">JEWEL SNATCHING / THEFT (நகை பறிப்பு / திருட்டு)</option>
<option value="BAG LIFTING / THEFT">BAG LIFTING / THEFT (கைப்பை பறிப்பு / திருட்டு)</option>
<option value="OTHER THEFT">OTHER THEFT (பிற பொருள் திருட்டு)</option>
<option value="RECEIVING STOLEN PROPERTY">RECEIVING STOLEN PROPERTY (திருட்டு பொருள் வாங்குதல்)</option>
<option value="DOCUMENT MISSING">DOCUMENT MISSING (ஆவணம் காணவில்லை)</option>
<option value="CHEATING / EMBEZZLEMENT / LAND GRABBING">CHEATING / EMBEZZLEMENT / LAND GRABBING (ஏமாற்றுதல் / பண / நில மோசடி)</option>
<option value="MAKING COUNTERFEIT NOTES / COINS ">MAKING COUNTERFEIT NOTES / COINS (கள்ள நோட்டு / நாணயம்  தயாரித்தல்)</option>
<option value="MURDER">MURDER (கொலை செய்தல்)</option>
<option value="KIDNAPPING / WRONGFUL CONFINEMENT">KIDNAPPING / WRONGFUL CONFINEMENT (ஆள்கடத்தல் / சட்டவிரோதமாக அடைத்து வைத்தல்)</option>
<option value="HURT">HURT (அடித்தல் / காயம் ஏற்படுத்துதல்)</option>
<option value="DAMAGING PROPERTY">DAMAGING PROPERTY (சொத்தை அழித்தல்)</option>
<option value="WORDY QUERREL / THREATENING">WORDY QUERREL / THREATENING (வாய்தகராறு செய்தல் / மிரட்டல்)</option>
<option value="EXTORTION">EXTORTION (மிரட்டி பணம் / நகை / பொருள் பறித்தல்)</option>
<option value="PUBLIC NUISANCE ">PUBLIC NUISANCE (பொது தொல்லை செய்தல்)</option>
<option value="EVE TEASING">EVE TEASING (பெண்களை கேலி செய்தல்)</option>
<option value="OFFENCE RELATED TO MARRIAGE">OFFENCE RELATED TO MARRIAGE (திருமணம் சம்பந்தமான குற்றங்கள்)</option>
<option value="RAPE">RAPE (கற்பழித்தல்)</option>
<option value="CYBER OFFENCES">CYBER OFFENCES (இணையதள குற்றங்கள்)</option>
<option value="TRAFFIC VIOLATION">TRAFFIC VIOLATION (போக்குவரத்து விதிமீறல்)</option>
<option value="OTHER OFFENCES">OTHER OFFENCES (பிற குற்றங்கள்)</option>
</select>

				</td>
				</tr>
 
				<tr>
				<td>Date of Occurrence</td>
				<td><input type="date" name="t11" required  /></td>
				</tr>
								
				<tr>
				<td>Place of Occurrence</td>
				<td><input type="text" name="t12" required   /></td>
				</tr>
				<tr>
				<td>Description</td>
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
$a2=$_POST['t1'];
$b2=$_POST['t2'];
$c2=$_POST['t3'];
$d2=$_POST['t4'];
$e2=$_POST['t5'];

$f2=$_POST['t6'];
$g2=$_POST['t7'];
$h2=$_POST['t8'];
$i2=$_POST['t9'];
$j2=$_POST['t10'];

$k2=$_POST['t11'];
$l2=$_POST['t12'];
$m2=$_POST['t13'];


$ins=mysqli_query($con,"insert into complainttable values('','$a2','$b2','$c2','$d2','$e2','$f2','$g2','$h2','$i2','$j2','$k2','$l2','$m2')");
echo "<script> alert('Complaint Registered successfully');</script>";
echo "<script>location.href='http://localhost/crime/user/complaint.php'</script>";
}
?>
        </div><?php
include('footer.php');
?>