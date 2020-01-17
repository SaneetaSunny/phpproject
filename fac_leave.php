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
				<li><a href="fac_leave.php">Leave Management</a></li>
				<li><a href="login.php">Logout</a></li>
			</ul>
		</div>
			<div>
				<h1>Faculty leave applications</h1><br><br>
				<table>
					<thead>
						<tr>
							<th>Fid</th>
							<th>FromDate</th>
							<th>ToDate</th>
							<th>Reason</th>
							<th>Status</th>
						</tr>
						<tbody>
							{%if authors%}
							{%for i in authors%}
							<tr>
								<td>{{i.Fid}}</td>
								<td>{{i.Fromdate}}</td>
								<td>{{i.Todate}}</td>
								<td>{{i.Reason}}</td>
								<td>{{i.Status}}</td>
								
							</tr>
							{% endfor %}
						{%endif %}
		
						</tbody>

					</thead>
				</table><br><br>
				<form action="{% url 'approve' %}" method=POST>
					{% csrf_token %}
				<table>
					<tr>
						<td>id</td>
						<td>:</td>
						<td><input type="text" name="faid"></td>
						<td><input type="submit" name="approve" value="Approve"></td>
					</tr>
				</table>
			</form>
			</div>
</div>
	</body>
</html>
		