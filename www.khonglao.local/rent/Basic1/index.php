<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <ul>
            <li><a href="/main/index.php"><i class="fa-solid fa-house"></i></a></li>
            <li><a href="/main/index.php" onmouseover="toggleDropdown()">หน้าหลัก</a>
            </li>
            <li><a href="../index.php" onmouseover="toggleDropdown()">เช่าหน้าร้านค้า</a>
                <ul class="dropdown">
                    <li><a href="#">ร้านเล็ก</a></li>
                    <li><a href="../Basic2">ร้านกลาง</a></li>
                    <li><a href="../Basic3">ร้านใหญ่</a></li>
                </ul>
            </li>
        </ul>
        <ul>
        <li><a class="LoginB" href="#" onmouseover="toggleDropdown()"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
		<ul class="dropdown">
                    <li><a href="../Login/logout.php">Log out</a></li>
                    <li><a href="../Login/reset-password.php">Reset Password</a></li>
                </ul>
        </ul>
    </nav>

    <div class="box">
		<a class="button" href="#divOne">Contact US</a>
	</div>
	<div class="overlay" id="divOne">
		<div class="wrapper">
			<h2>Please Fill up The Form</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					<form>
						<label>First Name</label>
						<input placeholder="Your name.." type="text">
						<label>Last Name</label>
						<input placeholder="Your last name.." type="text">
                        <label>Email</label>
						<input placeholder="Your email.." type="email">
						<label>Subject</label> 
						<textarea iplaceholder="Write something.."></textarea>
						<input class="smf" type="submit" value="Submit">
					</form>
				</div>
			</div>
		</div>
	</div>


    <div class="boxline">
    <a href="https://lin.ee/LkR860f"><img style="border-radius: 20px;" src="https://scdn.line-apps.com/n/line_add_friends/btn/th.png" alt="เพิ่มเพื่อน" height="36" border="0"></a>
	</div>
    <div class="boxfac">
		<a class="buttonf" href="#">Facebook</a>
	</div>



      

    <script src="https://kit.fontawesome.com/f86f17939c.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script>
	<script src="http://code.jquery.com/jquery-2.2.1.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>
</body>
</html>
