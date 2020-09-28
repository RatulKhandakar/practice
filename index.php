<!DOCTYPE html>
<html>
<head>
	<title>Hostel Management</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/logo.png" type="img/icon" rel="icon">
</head>
<body>
	<div id="full">
		<div style="background-image: url('img/hostel-1.jpg');">
			<div id="header">
				<div id="logo">
					<h1><font color="white">NSU Hostels</font></h1>
				</div>
				<div id="nav">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Book Rooms</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div id="banner"></div>
		</div>
		<div id="f1">
			<form action="r1.php" method="get">
				<center><table>
					<tr>
						<th width="20%" height="50px">Department</th>
						<th width="20%" height="50px">Check In</th>
						<th width="20%" height="50px">Check Out</th>
						<th width="20%" height="50px">Room</th>
						<td rowspan="2"><input type="submit" value="check" name="sub"></td>
					</tr>
					<tr>
						<td width="20%" height="50px"><center><input type="text" name="dl" placeholder="eg: CSE"></center></td>
						<td width="20%" height="50px"><center><input type="date" name="ci"></center></td>
						<td width="20%" height="50px"><center><input type="date" name="co"></center></td>
						<td width="20%" height="50px">
							<center><select name=room>
								<option>AC (Single)</option>
								<option>Non-AC (Single)</option>
								<option>AC (Shared)</option>
								<option>Non-AC (Shared)</option>
							</select></center>
						</td>
					</tr>
				</table></center>
			</form>
		</div>
		<div id="welcome">
			<h1 align="center"><font color="red">North South University</h1>
			<center><font size="4">
				Center of Excellence in Higher Education
			</font></center>
		</div>
	</div>

</body>
</html>