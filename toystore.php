<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="store.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form method="post">
    <div class="head">
        <img src="uploads/ORVZE20.jpg" alt="logo">
        <p><strong>TOY STORE</strong></p>
        <a href="purchase.php" name="buy"><i class="fa-solid fa-cart-shopping"></i> Purchase</a>
    </div><br>
</form>
<?php 
        if(isset($_POST['buy']))
        {
            header("Location:purchase.php");
        }
        ?>

    <div class="nav">
        <a href="#home">Home</a>
        <a href="abouttoy.html">About Us</a>
        <a href="contact-toy.php">Contact</a>
        <br><br><hr>
        </div>

    <div class="body">
        <br><br>
        <p>  Toys nurture children's' cognitive development during the most important childhood years. Toys stimulate concentration levels and enhance attention span and memory. 
            In turn, cognitive development during the childhood years improves children's' ability to approach language and math skills in a fun way.</p>
    <img src="uploads/3343.jpg" alt="Picture"><br><br>
    </div>

    <footer>
        <div class="social">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook fa-2xl"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-2xl"></i></a>
            <a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp fa-2xl"></i></a>
            <a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter fa-2xl"></i></a>
            <a href="https://in.linkedin.com/"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
        </div>
        <div class="detail">
            <p><i class="fa fa-duotone fa-user"></i> Suresh M</p>
            <p><i class="fa-solid fa-address-book"></i> Ambalapuli Bazzar, rajapalayam</p>
            <p><i class="fa-solid fa-phone"></i> 6379443875</p>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d8148.928564529126!2d77.54829927108072!3d9.450049389275009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sambalapuli%20bazzar!5e0!3m2!1sen!2sin!4v1685697063334!5m2!1sen!2sin" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>
</body>
</html>