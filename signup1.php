<?php
	require_once("connection.php");
	session_start();
	if(isset($_POST['sub']))
	{
		$name=$_POST['name'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$qualification=$_POST['qualification'];
		$mobile=$_POST['mobile'];
		$batchincharge=$_POST['batchincharge'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="INSERT INTO faculty(Name,Address,Dob,Gender,Qaulification,Mobileno,BatchInCharge,Email,Username,Password)VALUES('".$name."','".$address."','".$dob."','".$gender."','".$qualification."','".$mobile."','".$batchincharge."','".$email."','".$username."','".$password."')";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:faculty_signup.php');
		}
		mysqli_close($conn);
	}
		
		else if(isset($_POST['stsub']))
		{
			$admno=$_POST['admno'];
			$admdate=$_POST['admdate'];
			$name=$_POST['name'];
			$address=$_POST['address'];
			$dob=$_POST['dob'];
			$gender=$_POST['gender'];
			$mobile=$_POST['mobile'];
			$guardian=$_POST['guardian'];
			$batch=$_POST['batch'];
			$email=$_POST['email'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sql="insert into student(Admno,Admdate,Name,Address,Dob,Gender,Mobile,Guardian,Batch,Email,Username,Password)VALUES('".$admno."','".$admdate."','".$name."','".$address."','".$dob."','".$gender."','".$mobile."','".$guardian."','".$batch."','".$email."','".$username."','".$password."')";
			if(!$result=$conn->query($sql))
			{
				die('error in running query['.$conn->error.']');
			}
			else
			{
				header('location:student_signup.php');
			}
			mysqli_close($conn);
		}
		if(isset($_POST['editfac']))
		{
			$name=$_POST['name'];
			$address=$_POST['address'];
			$dob=$_POST['dob'];
			$gender=$_POST['gender'];
			$qualification=$_POST['qualification'];
			$mobile=$_POST['mobile'];
			$batchincharge=$_POST['batchincharge'];
			$email=$_POST['email'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$var=$_SESSION['Fid'];
			$sql="UPDATE faculty SET Name='".$name."',Address='".$address."',Dob='".$dob."',Gender='".$gender."',Qaulification='".$qualification."',Mobileno='".$mobile."',BatchInCharge='".$batchincharge."',Email='".$email."',Username='".$username."',Password='".$password."' WHERE Fid=$var";
			if(!$result=$conn->query($sql))
			{
				die('error in running query['.$conn->error.']');
			}
			else
			{
				header('location:fac_profile.php');
			}
			mysqli_close($conn);
		}
		
		else if(isset($_POST['editstu']))
		{
			$name=$_POST['name'];
			$address=$_POST['address'];
			$dob=$_POST['dob'];
			$gender=$_POST['gender'];
			$mobile=$_POST['mobile'];
			$guardian=$_POST['guardian'];
			$batch=$_POST['batch'];
			$email=$_POST['email'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$var=$_SESSION['Sid'];
			$sql="UPDATE student SET Name='".$name."',Address='".$address."',Dob='".$dob."',Gender='".$gender."',Mobile='".$mobile."',Guardian='".$guardian."',Batch='".$batch."',Email='".$email."',Username='".$username."',Password='".$password."' WHERE Sid=$var";
			if(!$result=$conn->query($sql))
			{
				die('error in running query['.$conn->error.']');
			}
			else
			{
				header('location:stud_profile.php');
			}
			mysqli_close($conn);
		}
		else if(isset($_POST['att']))
		{
			$date=$_POST['date'];
			$sid=$_POST['sid'];
			$name=$_POST['name'];
			$batch=$_POST['batch'];
			$h1=$_POST['h1'];
			$h2=$_POST['h2'];
			$h3=$_POST['h3'];
			$h4=$_POST['h4'];
			$sql="insert into attendance(Date,Sid,Name,Batch,Status_h1,Status_h2,Status_h3,Status_h4)VALUES('".$date."','".$sid."','".$name."','".$batch."','".$h1."','".$h2."','".$h3."','".$h4."')";
			if(!$result=$conn->query($sql))
			{
				die('error in running query['.$conn->error.']');
			}
			else
			{
				header('location:view_studattndc.php');
			}
			mysqli_close($conn);
		}
		else if(isset($_POST['assmnt']))
		{
			$assessmentno=$_POST['assessmentno'];
			$sid=$_POST['sid'];
			$name=$_POST['name'];
			$batch=$_POST['batch'];
			$sub1=$_POST['sub1'];
			$sub2=$_POST['sub2'];
			$sub3=$_POST['sub3'];
			$sql="insert into assessment(Assessment_No,Sid,Name,Batch,Sub_1,Sub_2,Sub_3)VALUES('".$assessmentno."','".$sid."','".$name."','".$batch."','".$sub1."','".$sub2."','".$sub3."')";
			if(!$result=$conn->query($sql))
			{
				die('error in running query['.$conn->error.']');
			}
			else
			{
				header('location:view_mark.php');
			}
			mysqli_close($conn);
		}
		
		else if(isset($_POST['leave']))
		{
			
			$sid=$_POST['sid'];
			$name=$_POST['name'];
			$batch=$_POST['batch'];
			$fromdate=$_POST['fromdate'];
			$todate=$_POST['todate'];
			$reason=$_POST['reason'];
			$status="pending";
			$sql="insert into leaves(Sid,Name,Batch,Fromdate,Todate,Reason,Status)VALUES('".$sid."','".$name."','".$batch."','".$fromdate."','".$todate."','".$reason."','".$status."')";
			if(!$result=$conn->query($sql))
			{
				die('error in running query['.$conn->error.']');
			}
			else
			{
				header('location:stud_applyleave.php');
			}
			mysqli_close($conn);
		}
		
		else if(isset($_POST['Approve']))
		{
			
			$id=$_POST['id'];
			$sql="UPDATE leaves SET Status='Approved' WHERE Id=$id";
			if(!$result=$conn->query($sql))
			{
				die('error in running query['.$conn->error.']');
			}
			else
			{
				header('location:stu_leave.php');
			}
			mysqli_close($conn);
		}
				
		else if(isset($_POST['Reject']))
		{
			
			$id=$_POST['id'];
			$sql="UPDATE leaves SET Status='Rejected' WHERE Id=$id";
			if(!$result=$conn->query($sql))
			{
				die('error in running query['.$conn->error.']');
			}
			else
			{
				header('location:stu_leave.php');
			}
			mysqli_close($conn);
		}
?>