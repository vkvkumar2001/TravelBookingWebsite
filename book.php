<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
    <section class="header">
        <a href="home.php" class="logo">travel</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <div class="heading" style="background:url(images/heading-img-3.jpg) no-repeat">
        <h1>book now</h1>
    </div>


<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name:</span>
                <input type="text" placeholder="Enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email:</span>
                <input type="email" placeholder="Enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>mobile:</span>
                <input type="number" placeholder="Enter your number" name="mobile">
            </div>
            <div class="inputBox">
                <span>address:</span>
                <input type="text" placeholder="Enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="Place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>how many:</span>
                <input type="number" placeholder="Number of person" name="guests">
            </div>
            <div class="inputBox">
                <span>arrivals:</span>
                <input type="date"  name="Arrivals">
            </div>
            <div class="inputBox">
                <span>leaving:</span>
                <input type="date"  name="Leaving">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">
    </form>

</section>









    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 8708004995</a>
            <a href="#"> <i class="fas fa-envelope"></i>travel@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> Delhi, 110001</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
            <a href="#"> <i class="fas fa-facebook-f"></i> facebook</a>
            <a href="#"> <i class="fas fa-twitter"></i> twitter</a>
            <a href="#"> <i class="fas fa-instagram"></i> instagram</a>
            <a href="#"> <i class="fas fa-linkedin"></i> linkedin</a>
            </div>
        </div>

        <div class="credit">created by <span>Vinay Kumar</span> ! all rights reserved!</div>

    </section>
        
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
    </body>

</html>