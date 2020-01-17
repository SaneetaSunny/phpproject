<!DOCTYPE html>
<html>
	<head>
		<title>facultyhome</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
		
		</style>  
	</head>
	<body class="bi">
		<div class="display">
		<div class="navbar">
			<h1><u>FACULTY</u></h1>
			<ul>
				<li> <a href="facultyhome.php">Home</a> </li>
				<li> <a href="fac_profile.php">My profile</a> </li>
				<li> <a href="">Student Details</a>
					<div class="submenu">
						<ul>
							<li><a href="view_student.php">Personal details</a></li>
							<li><a href="view_studattndc.php">Attendance</a></li>
							<li><a href="view_mark.php">Mark</a></li>
						</ul>

					</div>
				</li>
				<li><a href="login.php">Logout</a></li>
			</ul>
        </div>
		<div>
			<form action="signup1.php" method=POST>
			<?php
						require_once 'connection.php';
						session_start();
						$var=$_SESSION['Fid'];
						$sql="select * from faculty where Fid=$var";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
                <h1>Edit Profile</h1><br>
				
			
			
<table>

    <tr>
        <td>Name</td><td>:</td><td><input type="text" value=<?php echo $row['Name'];?> name="name"></td>
    </tr>
    <tr>
        <td>Address</td><td>:</td><td><input type="text" value=<?php echo $row['Address'];?> name="address"></td>
    </tr>
	<tr>
        <td>DOB</td><td>:</td><td><input type="text" value=<?php echo $row['Dob'];?> name="dob"></td>
    </tr>
 
    <tr>
        <td>Gender</td><td>:</td><td><input type="text" value=<?php echo $row['Gender'];?> name="gender"></td>
    </tr>
    <tr>
        <td>Qualification</td><td>:</td><td><input type="text" value=<?php echo $row['Qaulification'];?> name="qualification"></td>
    </tr>
    <tr>
        <td>Mobile</td><td>:</td><td><input type="text" value=<?php echo $row['Mobileno'];?> name="mobile"></td>
    </tr>
    <tr>
        <td>Batch in charge</td><td>:</td><td><input type="text" value=<?php echo $row['BatchInCharge'];?> name="batchincharge"></td>
    </tr>
    <tr>
        <td>Email</td><td>:</td><td><input type="text" value=<?php echo $row['Email'];?> name="email"></td>
    </tr>
	 <tr>
        <td>Username</td><td>:</td><td><input type="text" value=<?php echo $row['Username'];?> name="username"></td>
    </tr
    <tr>
        <td>Password</td><td>:</td><td><input type="text" value=<?php echo $row['Password'];?> name="password"></td>
    </tr>
</table>

           <?php
								}
							?>
             
            
<br>
<input type="submit" value="Save" name="editfac" class="button">
</form>
        </div>
	</div>
	</body>
</html>
		