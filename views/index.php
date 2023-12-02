<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Exclusivo </title>
    <link rel="stylesheet" href="public/style.css">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/carspeed.avif">
</head>
<body>
    <header>
        <!-- menu responsive -->        
        <div class="menu_toggle"> </div>     
       <div class="logo">
            <p><span>Auto</span>Exclusivo</p></div>        
        <ul class="menu">
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="#cars">Vehicules</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <button class="login_btn"><a href="index.php?action=auth">Admin</a></button>
    </header>

    <section id="home">
        <div class="left">
            <h1>Buy <span>Your Car</span> Cheaper From Us</h1>
            <p>Are you ready to elevate your driving experience to new heights? Look no further than us, where innovation meets style, and performance meets efficiency. We're not just building cars; we're crafting an extraordinary driving lifestyle.</p>
            <a href="#cars">BUY NOW</a>
        </div>
        <div class="right">
            <img src="images/img1.png">
        </div>
    </section>
    <!-- section vehicule -->
    <section id="cars">
        <h1 class="section_title">Our vehicules</h1>
        <div class="images">
            <ul>
                <li class="car">
                   <div>
                       <img src="images/car1.jpg" alt="">
                   </div>
                   <span>BUGATTI</span>
                   <span class="prix">400.000$</span>
                   <a href="index.php?action=commande&id=BUGATTI" >BUY NOW</a>
                </li>
                <li class="car">
                    <div>
                        <img src="images/bmwserie5.jpg" alt="">
                    </div>
                    <span>BMW série 5</span>
                    <span class="prix">350.000$</span>
                    <a href="index.php?action=commande&id=BMW">BUY NOW</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/car3.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    <span class="prix">300.000$</span>
                    <a href="index.php?action=commande&id=LAMBORGHINI">BUY NOW</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/porche.jpg" alt="">
                    </div>
                    <span>PORCHE</span>
                    <span class="prix">450.000$</span>
                    <a href="index.php?action=commande&id=PORCHE">BUY NOW</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/ferrari.jpg" alt="">
                    </div>
                    <span>FERRARI</span>
                    <span class="prix">250.000$</span>
                    <a href="index.php?action=commande&id=FERRARI">BUY NOW</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/lexusrx.jpg" alt="">
                    </div>
                    <span>Lexus rx</span>
                    <span class="prix">500.000$</span>
                    <a href="index.php?action=commande&id=Lexus"> BUY NOW</a>
                 </li>
            </ul>
        </div>
    </section>

    <!-- section services -->

    <section id="services">
        <h1 class="section_title">Our Services</h1>
        <div class="list_services">
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Easy Financing Solutions</h3>
                <p>Our finance center is committed to simplifying the car-buying process. Explore flexible financing options, calculate monthly payments, and get pre-approved—all in one place.</p>
                 <a href="#" class="read_more">More</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3> Exclusive Deals and Promotions</h3>
                <p>Enjoy special promotions, discounts, and exclusive deals when you choose LuxCar. We believe in rewarding our customers for their trust and loyalty.</p>
                 <a href="#" class="read_more">More</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3> Customer Support Excellence</h3>
                <p>Our dedicated customer support team is here to assist you at every step. Have a question or need assistance? Reach out to us via chat, email, or phone.</p>
                 <a href="#" class="read_more">More</a>
            </div>
        </div>
    </section>
    

    <!-- section contact -->

    <section id="contact">
        <h1 class="section_title">Contact Us</h1>
        <div class="localisation_contact_div">
            <div class="localisation">
                <h3>Notre Adresse</h3>
                <iframe src="https://www.google.com/maps/d/embed?mid=15up4wcPyP72u0ZirRNXsVED0HUI&hl=fr&ehbc=2E312F" width="640" height="480"></iframe>
            </div>

            <div class="form_contact">
                <h3>Send a message</h3>
                <form action="#">
                    <input type="text"placeholder="Name">
                    <input type="email"placeholder="Adresse Mail">
                    <input type="text"placeholder="Object">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </section>
 <br>
    <footer>
        <p>CarLuxe Copyright 2024 </p>
    </footer>
    </body>
</html>
    <script>
        //menu responsive code JS

        var menu_toggle = document.querySelector('.menu_toggle');
        var menu = document.querySelector('.menu');
        var menu_toggle_span = document.querySelector('.menu_toggle span');

        menu_toggle.onclick = function(){
            menu_toggle.classList.toggle('active');
            menu_toggle_span.classList.toggle('active');
            menu.classList.toggle('responsive') ;
        }

    </script>
    