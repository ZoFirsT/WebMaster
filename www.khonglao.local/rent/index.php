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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <ul>
            <li><a href="../main/index.php"><i class="fa-solid fa-house"></i></a></li>
            <li><a href="../main/index.php" onmouseover="toggleDropdown()">หน้าหลัก</a>
            </li>
            <li><a href="#" onmouseover="toggleDropdown()">เช่าหน้าร้านค้า</a>
                <ul class="dropdown">
                    <li><a href="./Basic1/index.php">ร้านเล็ก</a></li>
                    <li><a href="./Basic2/index.php">ร้านกลาง</a></li>
                    <li><a href="./Basic3/index.php">ร้านใหญ่</a></li>
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

    <div class="pricing-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-12">
					<div class="single-price">
						<div class="deal-top">
							<h3>Basic</h3>
							<h4>29 <span class="sup">$</span></h4>
						</div>
						<div class="deal-bottom">
							<ul class="deal-item">
								<li>10 GB Storage</li>
								<li>10 Email address</li>
								<li>10 Domain names</li>
								<li>500 gb Bandwidth</li>
								<li>24 hour Support</li>
							</ul>
							<div class="btn-area">
								<a href="./Basic3/index.php">Get Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12">
					<div class="single-price">
						<div class="deal-top">
							<h3>Standard</h3>
							<h4>59 <span class="sup">$</span></h4>
						</div>
						<div class="deal-bottom">
							<ul class="deal-item">
								<li>50 GB Storage</li>
								<li>50 Email address</li>
								<li>50 Domain names</li>
								<li>1 TB Bandwidth</li>
								<li>24 hour Support</li>
							</ul>
							<div class="btn-area">
								<a href="./Basic3/index.php">Get Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12">
					<div class="single-price">
						<div class="deal-top">
							<h3>Premium</h3>
							<h4>99 <span class="sup">$</span></h4>
						</div>
						<div class="deal-bottom">
							<ul class="deal-item">
								<li>100 GB Storage</li>
								<li>100 Email address</li>
								<li>100 Domain names</li>
								<li>5 TB Bandwidth</li>
								<li>24 hour Support</li>
							</ul>
							<div class="btn-area">
								<a href="./Basic3/index.php">Get Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
