<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Chubby's </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            background-image: url('images/food-frame-with-chinese-dish.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        #navbar-header {
            position: fixed;
            top: 0;
            width: 100%;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .home-container {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 1100px;
            color: rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            padding: 40px;
            text-shadow: 2px 2px rgb(100, 100, 100);
            background-color: rgba(0, 0, 0, 0.4);
            margin-top: 50px;
        }

        .home-container > img {
            width: 200px;
            height: 200px;
        }

        .home-container > h1 {
            font-size: 70px;
            font-weight: bold;
        }

        .home-container > h1 > p {
            color: orangered;
        }

        .home-container > p {       
            font-size: 25px;
        }

        .contact-us-container {
            width: 1100px;
            color: rgb(255, 255, 255);
            text-align: center;
            text-shadow: 2px 2px rgb(100, 100, 100);
            box-shadow: rgba 0, 0, 0, 0.0;
            margin-top: 64px;
            display: flex;
            justify-content: center;
        }

        .contact-container > div {
            padding: 30px;
        }

        .details-container {
            background-color: rgba(0, 0, 0, 0.4);
            padding: 50px;
        }

        .details-container > h1 {
            color: orangered;
        }

        .details-container > p {
            margin: 10px;
        }

        .details-container > h6 {
            margin: 25px;
        }

        .social {
            margin: 10px 35px;
        }
        
        .social > i {
            font-size: 25px;
            margin-right: 15px;
        }

        .form-container {
            padding: 50px;
        }

        .food-menu-container {
            display: flex;
            flex-direction: column;
            width: 1200px;
            height: 600px;
            margin-top: 30px;
            color: rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .food-menu-container > h1{
            color: orangered;
        }

        .menus {
            display: flex;
            flex-wrap: wrap;
            overflow: auto;
        }

        .card {
            margin: 19px;
        }

        #navbar-header {
    background-color: orange !important;
  }

  #navbarNav {
    background-color: orange;
  }
  #navbarNav .nav-link {
    color: black !important;
  }
  #navbarNav .nav-link:hover {
    color: white !important;
  }

  .navbar-brand {
    color: white !important;
  }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar-header">
        <a class="navbar-brand ml-3" href="#"> Chubby's </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#foodMenu">Food Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactUs">Contact Us</a>
                </li>
            </ul>
            
            <a class="nav-link ml-auto" href="./admin.php" style="color: rgb(255, 255, 255);">Admin Area</a>
        </div>
    </nav>      
    
    <div class="main">

        <div data-spy="scroll" data-target="#navbar-header" data-offset="0">

            <section id="home">
            <div class="home-container row">
                <img src="images/364354225_717845120154534_3038933992408346217_n-removebg-preview.png" alt="">
                <h1> Welcome to <br> <p>Chubby's</p> </h1>
                <p>Explore a world of culinary delights in our Chubby's Food app. Whether you're a food enthusiast or a restaurant owner, our platform is designed to enhance your dining experience. </p>
            </div>
            </section>

            <section id="foodMenu">
                <div class="food-menu-container">
                    <h1 class="text-center"> Our Food Menu </h1>

                    <div class="menus">

                        <?php 
                            
                            include('conn/conn.php');

                            $stmt = $conn->prepare("SELECT * FROM `tbl_menu`");
                            $stmt->execute();

                            $result = $stmt->fetchAll();

                            foreach($result as $row) {
                                $image = $row['image'];
                                $menuName = $row['menu_name'];
                                $price = $row['price'];
                                $description = $row['description'];
                                ?>


                            <div class="card" style="width: 15rem; background-color:rgba(0,0,0,0.5);" >
                                <img src="images/<?= $image ?>" class="card-img-top" alt="..." style="height:150px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $menuName ?></h5>
                                    <p class="card-text">Description: <?= $description ?></p>
                                </div>
                                <div class="card-footer">
                                    Price: <?= $price ?>
                                </div>
                            </div>

                                <?php
                            }
                        ?>

                    </div>
                </div>
            </section>

            <section id="contactUs">
                <div class="contact-us-container row">

                <div class="details-container col-6">
                    <h1>Contact Us</h1>
                    <p>Have questions, feedback, or just want to say hello? We'd love to hear from you! Reach out to us through the following channels:</p>

                    <h6><span><i class="fa-solid fa-envelope"></i></span> Email: info@chubby's.com</h6>

                    <h6><span><i class="fa-solid fa-phone"></i></span> Phone: +63 948 654 4648</h6>

                    <h6><span><i class="fa-solid fa-location-dot"></i></span> Address: Tanza, Boac, Marinduque (Inside D' Tree House) </h6>

                    <div class="social">
                        <i class="fa-brands fa-facebook"></i>
                    </div>
                </div>


            </section>


    </div>

    <!-- Bootstrap JS -->
    <!-- Replace the slim version with the full version of jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            // Add active class to navbar links on click
            $(".navbar-nav a").on("click", function(){
                $(".navbar-nav").find(".active").removeClass("active");
                $(this).parent().addClass("active");
            });
        });
    </script>
</body>
</html>
