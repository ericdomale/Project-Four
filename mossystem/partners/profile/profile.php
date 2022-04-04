<?php session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
$partnerno = $_GET['partnerno'];

$query = "SELECT * FROM partners WHERE partnerno='$partnerno'";
$update = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="fontawesome-all.min.css">
    <link rel="stylesheet" href="font-awesome.css">
    <link rel="stylesheet" href="profile.css">
    
</head>

<body>


    <!--HEADER SECTION START-->

    <header>
    <?php while ($row = mysqli_fetch_array($update)) { ?>

        <div class="user">
            <img src="Photo1.jpg" alt="">
            <h3 class="name"><?php echo $row['fullname'];?></h3>
            <p class="post"><?php echo $row['partnerno'];?></p>
        </div>

        <nav class="navbar">
            <ul>
                <!--<li><a href="#home">home</a></li>-->
                <li><a href="#about">Profile</a></li>
                <li><a href="#education">Records</a></li>
                <li><a href="#portfolio">Certificates</a></li>
                <!--<li><a href="#contact">contact</a></li>-->
                <li><a href="#" onclick="history.back()">go back</a></li>
            </ul>
        </nav>

    </header>

    <!--HEADER SECTION ENDS-->


    <div id="menu" class="fa fa-bars"></div>


    <!--HOME SECTION START-->

    <!--<section class="home" id="home">

        <h3>HI THERE !</h3>
        <h1>I'M <span>shaik anas</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel architecto voluptatem nisi et ipsa temporibus
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, vel!
        </p>
        <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>
    </section>-->

    <!--HOME SECTION ENDS-->

    <!--ABOUT SECTION STARTS-->

    <section class="about" id="about">

        <h1 class="heading"> <span>partner</span> profile </h1>

        <div class="row">

            <div class="info">
                <h3 contenteditable="true"> <span> NAME : </span><?php echo $row['fullname'];?></h3>
                <h3 contenteditable="true"> <span> d.o.b : </span><?php echo $row['partdate'];?></h3>
                <h3 contenteditable="true"> <span> GENDER : </span><?php echo $row['gender'];?></h3>
                <h3 contenteditable="true"> <span> STATUS : </span><?php echo $row['status'];?></h3>
                <h3 contenteditable="true"> <span> EMAIL : </span><?php echo $row['email'];?></h3>
                <h3 contenteditable="true"> <span> CONTACT : </span><?php echo $row['contact'];?></h3>
                <h3 contenteditable="true"> <span> ADDRESS : </span><?php echo $row['partaddress'];?></h3>
                <!--<a href="#"><button class="btn"> download CV <i class="fa fa-download"></i></button></a>-->
            </div>

            <div class="counter">

                <div class="box">
                    <span><?php echo $row['since'];?></span>
                    <h3>partner since</h3>
                </div>

                
                <div class="box">
                    <span><?php echo $row['work'];?></span>
                    <h3>occupation</h3>
                </div>


                <div class="box">
                    <span><?php echo $row['gpsaddress'];?></span>
                    <h3>G.P.S address</h3>
                </div>

            </div>
        </div>
    </section>

    <!--ABOUT SECTION ENDS-->

    <!--EDUCATION SECTION STARTS-->

    <section class="education" id="education">

        <h1 class="heading"> partner <span>records</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fa fa-graduation-cap"></i>
                <span>2016</span>
                <h3>shepherd ordination</h3>
                <p>Ordination as Leader of the Wellspring Cell</p>
            </div>

            <div class="box">
                <i class="fa fa-graduation-cap"></i>
                <span>2017</span>
                <h3>back end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio omnis porro ducimus!</p>
            </div>

            <div class="box">
                <i class="fa fa-graduation-cap"></i>
                <span>2018</span>
                <h3>front end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio omnis porro ducimus!</p>
            </div>

            <div class="box">
                <i class="fa fa-graduation-cap"></i>
                <span>2019</span>
                <h3>front end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio omnis porro ducimus!</p>
            </div>

            <div class="box">
                <i class="fa fa-graduation-cap"></i>
                <span>2020</span>
                <h3>front end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio omnis porro ducimus!</p>
            </div>

            <div class="box">
                <i class="fa fa-graduation-cap"></i>
                <span>2021</span>
                <h3>front end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio omnis porro ducimus!</p>
            </div>

        </div>
    </section>

    <!--EDUCATION SECTIION ENDS-->

    <!--PORTFOLIO SECTION STARTS-->

    <section class="portfolio" id="portfolio">

        <h1 class="heading"> member <span>certificates</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="Photo1.jpg" alt="">
            </div>

            <div class="box">
                <img src="Photo1.jpg" alt="">
            </div>

            <div class="box">
                <img src="Photo1.jpg" alt="">
            </div>

            <div class="box">
                <img src="Photo1.jpg" alt="">
            </div>

            <div class="box">
                <img src="Photo1.jpg" alt="">
            </div>

            <div class="box">
                <img src="Photo1.jpg" alt="">
            </div>
        </div>

    </section>

    <!--PORTFOLIO SECTION ENDS-->

    <!--CONTACT SECTION STARTS-->

   <!-- <section class="contact" id="contact">

        <h1 class="heading"> my <span>contact</span> </h1>

        <div class="row">

           <div class="content">

              <h3 class="title">contact info</h3>

              <div class="info">
                  <h3><i class="fas fa-envelope"></i> shaikh@gmail.com </h3>
                  <h3><i class="fa fa-phone"></i> +23302425087567 </h3>
                  <h3><i class="fa fa-map-marker"></i> Accra, Ghana </h3>
              </div>

           </div>

           <form action="">

            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="text" placeholder="project" class="box">
            <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
            <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i></button>

           </form>

        </div>

    </section>-->
    <?php } ?>
    <!--CONTACT SECTION ENDS-->

    <!--SCROLL TOP BUTTON-->
    <a href="#home" class="top">
        <img src="" alt="">
    </a>







    <script src="jquery-3.6.0.min.js"></script>
    <script src="profile.js"></script>
</body>

</html>