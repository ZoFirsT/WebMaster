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
            <li><a href="#"><i class="fa-solid fa-house"></i></a></li>
            <li><a href="#" onmouseover="toggleDropdown()">หน้าหลัก</a>
            </li>
            <li><a href="/rent/index.php" onmouseover="toggleDropdown()">เช่าหน้าร้านค้า</a>
                <ul class="dropdown">
                    <li><a href="/rent/Basic1/index.php">ร้านเล็ก</a></li>
                    <li><a href="/rent/Basic2/index.php">ร้านกลาง</a></li>
                    <li><a href="/rent/Basic3/index.php">ร้านใหญ่</a></li>
                </ul>
            </li>
        </ul>
        <ul>
            <li><a class="LoginB" href="#" onmouseover="toggleDropdown()"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
            <ul class="dropdown">
                    <li><a href="../Login/logout.php">Log out</a></li>
                    <li><a href="../Login/reset-password.php">Reset Password</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="image-slideshow">
        <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img alt="Third slide" class="d-block w-100" style="border-radius: 20px;" src="https://picsum.photos/1920/1080">
                </div>
                <div class="carousel-item">
                    <img alt="Third slide" class="d-block w-100" style="border-radius: 20px;" src="https://picsum.photos/1920/1080">
                </div>
                <div class="carousel-item">
                    <img alt="Third slide" class="d-block w-100" style="border-radius: 20px;" src="https://picsum.photos/1920/1080">
                    
                </div>
            </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span
                    aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a>
            <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span
                    aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
        </div>
    </div>

    

    <div class="credit-card-footer">
        <p>Update 5,March 66</p>
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
