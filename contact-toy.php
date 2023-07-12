<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="head">
        <img src="uploads/ORVZE20.jpg" alt="logo">
        <p><strong>LITTLE MAGIC TOY STORE</strong></p>
    </div><br><br>
    <div class="nav">
        <a href="toystore.php">Home</a>
        <a href="abouttoy.html">About Us</a>
        <a href="contact-toy.php">Contact</a>
        <br><br>
        <hr>
    </div>

    <form method="post">
        <div class="contact">
            <div class="touch">
                <h1>Get In Touch</h1>
                <table>
                    <tr>
                        <td><i class="fa-solid fa-user fa-lg"></i></td>
                        <td><input type="text" name="name" placeholder="Enter Your Name" autofocus required></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-envelope fa-lg"></i></td>
                        <td><input type="email" name="email" placeholder="Enter Your Email ID" required></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-phone fa-lg"></i></td>
                        <td><input type="text" name="phone" placeholder="Enter Your Phone Number" pattern="[0-9]+" maxlength="10" required></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-message fa-lg"></i></td>
                        <td><textarea name="enquiry" style="border-radius: 5px;border-style: none;resize: none;padding:5px;margin-left: 10px;" cols="40" rows="8" placeholder="Any Enquiry" required></textarea></td>
                    </tr>
                </table><br><br>
                <button type="submit" name="submit">Submit</button>
                <button type="reset" style="margin-left: 110px;">Clear</button>
            </div>
            <iframe style="margin-top: 100px;margin-left: 150px;" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d8148.928564529126!2d77.54829927108072!3d9.450049389275009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sambalapuli%20bazzar!5e0!3m2!1sen!2sin!4v1685697063334!5m2!1sen!2sin" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </form>
    <br><br><br>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $enquiry = $_POST['enquiry'];
        $connect = mysqli_connect("Localhost", "root", "", "toystore");
        $q = "insert into feedback values('$name','$email','$phone','$enquiry')";
        if ($connect->query($q)) {
            echo "<script>alert('Thankyou!')</script>";
        }
    }


    ?>




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