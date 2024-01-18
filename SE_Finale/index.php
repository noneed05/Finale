<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <title>User Dashboard</title>
</head>

<body>
    
    <header class="header">
        <nav class="navbar">
            <img style="height: 90px;" src="images/Ellipse 2.png" alt="">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link"></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="#order" class="nav-link">MENU</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">CONTACT US</a>
                </li>
                <li class="nav-item ole">
                    <a href="logout.php" class="btn btn-warning">SIGN OUT</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <section class="home-page" id="home">
    <div class="medina">
        <div>
            <div>
                <h1>TASTY FOOD COMING TO YOU</h1>
            </div>
            <div>
                <h5>Your time is precious, and we know your struggle only to get your
                    favorite food. <br> Get your job done and let us lessen your hustle!</h5>
            </div>
            <button class="btnnn"><a href="admin.php">ORDER NOW</a></button>

        </div>
        <div class="gapss"><br><br><br><br>
            <div class="gabs">
                <img class="gaps" src="images/357666822_1467339004017632_5731941498657225175_n 1.png" alt="">
                <img class="gaps" src="images/370174706_716030997254968_7832971583330132184_n 1.png" alt="">
            </div><br>
            <div class="gabs">
                <img class="gaps" src="images/370286101_872519134516201_4590344277594613990_n 1.png" alt="">
                <img class="gaps" src="images/371346351_367850139152092_4648814845415699316_n 1.png" alt="">
            </div><br>
            <div class="gabs">
                <img class="gaps" src="images/371399452_362930469553043_2153767239717781575_n 1.png" alt="">
                <img class="gaps" src="images/371541334_1401671920748743_7516892446535557928_n 1.png" alt="">
            </div><br>
            <div class="gabs">
                <img class="gaps" src="images/381191907_1336997050255494_8675765617146014305_n 1.png" alt="">
                <img class="gaps" src="images/384498329_1092380178839150_4908604687985866378_n 1.png" alt="">
            </div><br>
            <div class="gabs">
                <img class="gaps" src="images/385526151_1675391162982865_190668517628430577_n 1.png" alt="">
                <img class="gaps" src="images/385544829_363025946238057_5504793285831347789_n 1.png" alt="">
            </div>

        </div>
        

        
    </div>


    </section>
</body>

<script>
    const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}
</script>

</html>
