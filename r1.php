<?php
include("connection.php");
$r=$_GET['room'];
$ci=$_GET['ci'];
$co=$_GET['co'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hostel Management</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/logo.png" type="img/icon" rel="icon">
</head>
<body>
	<div id="full">
		<div id="bg" style="background-image: url('img/bed.jpg'); height:1200px;">
			<div id="header">
				<div id="logo">
					<h1><font color="white">NSU Hostels</font></h1>
				</div>
				<div id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="r1.php">Book Rooms</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div id="banner">
				<div id="form">
					<form action="r1.php" method="post">
						<table>
							<?php
								$q1="select * from room where status='vacant'";
								$run=mysqli_query($a,$q1);
								$row=mysqli_fetch_array($run);
								echo $rno=$row['rno'];

								$q="select * from room where status='vacant'";
								$run=mysqli_query($a,$q);
								$num=mysqli_num_rows($run);
								if($r<=$num){
									echo "Number of available rooms: ";
									echo $num;
									?>
									<tr>
								<td><b>Student ID</b></td>
								<td><input type="text" name="idno" placeholder="Enter Id" title="ID" required></td>
							</tr>
							<tr>
								<td><b>Name</b></td>
								<td><input type="text" name="name" placeholder="Enter Name" title="Name" required></td>
							</tr>
							<tr>
								<td><b>Email</b></td>
								<td><input type="text" name="email" placeholder="Enter Email" title="E-mail" required></td>
							</tr>
							<tr>
								<td><b>Check In</b></td>
								<td><input type="text" name="coin" value="<?php echo $ci; ?>" title="Check in" required></td>
								<td><b>Check Out</b></td>
								<td><input type="text" name="coout" value="<?php echo $co; ?>" title="Check out" required></td>
							</tr>
							<tr>
								<td><b>Contact No.</b></td>
								<td><input type="text" name="cno" placeholder="Enter Number" title="Cno" required></td>
							</tr>
							<tr>
								<td><b>Dept.</b></td>
								<td><input type="text" name="dept" placeholder="Enter Department" title="Dept" required></td>
							</tr>
							<td>
								<input style="height:30px; width:120px; border-radius:20px; opacity:0.7;" type="submit" name="submit" value="Submit">
							</td>

							<?php	}
							else{
								echo "Room not available";
							}
							?>
							
						</table>
					</form>
					<?php
					if(isset($_POST['submit'])){
						$sid=$_POST['idno'];
						$name=$_POST['name'];
						$email=$_POST['email'];
						$coin=$_POST['coin'];
						$coout=$_POST['coout'];
						$cno=$_POST['cno'];
						$dept=$_POST['dept'];

						if(mysqli_query($a,"insert into form(id,name,email,cidate,codate,contact,dept) value('$sid','$name','$email','$coin','$coout','$cno','$dept')"))
						{
							mysqli_query($a,"update room set status='Booked' where rno=$rno");
							echo "Data inserted";
						}
						else{
							echo "Data insertion failed";
						}
					}

					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>