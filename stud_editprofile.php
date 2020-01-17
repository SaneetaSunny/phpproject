<!DOCTYPE html>
<html>
	<head>
		<title>adminhome</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
		</style>  
	</head>
	<body class="bi">
		<div class="display">
			<div class="navbar">
				<h1><u>STUDENT</u></h1>
				<ul>
					<li> <a href="studenthome.php">Home</a></li>
					<li> <a href="#">My Profile</a>
						<div class="submenu">
							<ul>
								<li><a href="stud_profile.php">Personal details</a></li>
								<li><a href="viewmyattndc.php">Atendance</a></li>
								<li><a href="viewmymark.php">Mark</a></li>
							</ul>
						</div>
					</li>
			
					<li> <a href="#">Leave</a>
						<div class="submenu">
							<ul>
								<li><a href="stud_applyleave.php">Apply Leave</a></li>
								<li><a href="stu_appliedleave.php">Applied Leave</a></li>
								
							</ul>
							</div>
					</li>
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
        <div>
           
            <form  action="signup1.php" method=POST>
               <?php
						require_once 'connection.php';
						session_start();
						$var=$_SESSION['Sid'];
						$sql="select * from student where Sid=$var";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
					<h1>Edit Profile</h1><br>
            <br>

            <table>

                <tr>
                    <td>Name</td><td>:</td><td><input type="text" value=<?php echo $row['Name'];?> name="name"></td>

                </tr>
        
                
                <tr>
                    <td>Address</td><td>:</td><td><input type="text" value=<?php echo $row['Address'];?> name="address"></td>
                </tr>
				
                <tr>
                    <td>Date Of Birth</td><td>:</td><td><input type="text" value=<?php echo $row['Dob'];?> name="dob"></td>
                </tr>
				
                <tr>
                    <td>Gender</td><td>:</td><td><input type="text" value=<?php echo $row['Gender'];?> name="gender"></td>
                </tr>
                
                <tr>
                    <td>Mobile</td><td>:</td><td><input type="text" value=<?php echo $row['Mobile'];?> name="mobile"></td>
                </tr>
                <tr>
                    <td>Guardian</td><td>:</td><td><input type="text" value=<?php echo $row['Guardian'];?> name="guardian"></td>
                </tr>
                <tr>
                    <td>Batch</td><td>:</td><td><input type="text" value=<?php echo $row['Batch'];?> name="batch"></td>
                </tr>
                <tr>
                    <td>Email</td><td>:</td><td><input type="text" value=<?php echo $row['Email'];?> name="email"></td>
                </tr>
				
				<tr>
                    <td>Username</td><td>:</td><td><input type="text" value=<?php echo $row['Username'];?> name="username"></td>
                </tr>
				
                <tr>
                    <td>Password</td><td>:</td><td><input type="text" value=<?php echo $row['Password'];?> name="password"></td>
                </tr>
            </table>
			<?php
				}
			?>


   
            <br><br>
            <input type="submit" value="Save" name="editstu" class="button"><br><br>
          
        </form>
        </div>
	</div>
	</body>
</html>
		