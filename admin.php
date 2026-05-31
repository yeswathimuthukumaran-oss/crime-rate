<?php
include('header.php');
?>

  <?php
  error_reporting(0);
  ?> 
  
 
  <div class="container marketing">

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
			<h2> Admin Login Here </h2>
                   <form method="post" action="admin.php">
				
				<table class="style1" style ="padding-left :50px;">
<tr>
<td  style="padding:10px;">User Name</td>
<td style="padding:10px;" >
   <input type="text" name="un" required/></td>
</tr>
<tr><td style="padding:10px;"  >Password</td>
<td style="padding:10px;" >
<input type="password" name="pa"  required/></td></tr>
    <tr><td>
       <input type="submit" name="submit" value="submit" /></td>
	   <td><input type="reset" name="cancel"></td>
       
        </tr>
        </table>
		</form>
            </div>
            
			<?php
if($_POST['submit']=="submit")
{
$a=$_POST['un'];
$b=$_POST['pa'];
if($a=="admin" and $b=="admin")
{
echo "<script> window.location='http://localhost/crime/admin/index.php';</script>";
}
else
{
echo "<script>alert('Incorrect password');</script>";
}
}
?>

			
			
        </div><?php
include('footer.php');
?>