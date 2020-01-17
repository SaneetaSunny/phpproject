<!DOCTYPE html>
<html>
	<head>
		<title>adminhome</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
			table,td,th{border: 2px solid black;border-collapse: collapse;background-color: grey;text-align: center;padding:10px;}
		</style>  
	</head>
	<body class="bi">
		<div class="display">
		
		<div class="navbar">
			<h1><u>ADMIN</u></h1>
			<ul>
				<li> <a href="adminhome.php">Home</a> </li>
				<li> <a href="faculty_signup.php">Add Faculty</a> </li>
				<li> <a href="student_signup.php">Add Student</a> </li>
				<li> <a href="">Student Details</a>
					<div class="submenu">
						<ul>
							<li><a href="stu_details.php">Personal details</a></li>
							<li><a href="stu_attndc.php">Atendance</a></li>
							<li><a href="stu_mark.php">Mark</a></li>
						</ul>

					</div>
				</li>
				<li> <a href="fac_details.php">Faculty Details</a></li>
				<li><a href="stu_leave.php">Leave Management</a></li>
				<li><a href="login.php">Logout</a></li>
			</ul>
		</div>
				<div>
					<h1>FACULTY DETAILS</h1>
					<br><br>
					<table>
						<thead>
							<tr>
								<th>Faculty id</th>
								<th>Name</th>
								<th>Address</th>
								<th>DOB</th>
								<th>Gender</th>
								<th>Qualification</th>
								<th>Mobile</th>
								<th>BatchInCharge</th>
								<th>Email</th>
							</tr>
		
						</thead>
						<tbody>
							<?php
						require_once'connection.php';
						$sql="select * from faculty";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
							<tr>
								<td><?php echo $row['Fid'];?></td>
								<td><?php echo $row['Name'];?></td>
								<td><?php echo $row['Address'];?></td>
								<td><?php echo $row['Dob'];?></td>
								<td><?php echo $row['Gender'];?></td>
								<td><?php echo $row['Qaulification'];?></td>
								<td><?php echo $row['Mobileno'];?></td>
								<td><?php echo $row['BatchInCharge'];?></td>
								<td><?php echo $row['Email'];?></td>
							</tr>
							<?php
								}
							?>
		
						</tbody>
					</table>
		
				</div>
	</div>
	</body>
</html>
		