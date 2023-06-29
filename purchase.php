<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="newpurchase.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 

    <div class="head">
        <!-- <img src="ORVZE20.jpg" alt="logo"> -->
        <h1><script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/ytdssnsw.json"
                trigger="hover"
                colors="outline:#121331,primary:#b26836"
                style="width:100px;height:100px">
            </lord-icon>KIDS TOYS SALE!
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/fpmktvxe.json"
                trigger="hover"
                colors="outline:#121331,primary:#fdc539,secondary:#b06836"
                style="width:100px;height:100px">
            </lord-icon></h1>
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    </div>

<?php error_reporting (E_ALL ^ E_NOTICE); ?>


    <!-- <div class="user">
        <label>Name</label>
        <input type="text" name="uname" placeholder="Enter your name">
        <label>Phone Number</label>
        <input type="text" name="phone" placeholder="Enter your Phone Number" pattern="[0-9]+" maxlength="10">
</div> -->
<br><br><br>

<?php 
$connect=mysqli_connect("Localhost","root","","toystore");
$q="SELECT * FROM addnew";
$view=$connect->query($q);
foreach($view as $value)
{
?>
<div class="card1">
    <form method="post">
    <div class='card'>
        <img src="uploads/<?php echo $value['toypic']; ?>" width="250" height="250"><br>
        <?php echo $value['toyname'];?><br>
        <i class='fa-sharp fa-solid fa-indian-rupee-sign'></i><?php echo $value['price']; ?><br>
        <input type="text" name="id" value="<?php echo $value['id'] ?>">
        <input type="number" name="quantity" placeholder="Quantity" min=0><br>
        <button name="addto" type="submit">Add to Cart</button>
        <!-- <button type="submit" name="addto"><a class="cart" href="purchase.php?buy=<?php echo $value['id']; ?>">Add to cart</a></button> -->
    </div>
</form>
</div> 

<?php }  ?>
<?php 
    if(isset($_POST['addto']))
    {
        $quan=$_POST['quantity'];
        $id=$_POST['id'];
        $connect=mysqli_connect("Localhost","root","","toystore");
        $q="select toyname,price,quantity from addnew where id='$id'";
        $m=$connect->query($q);
        foreach($m as $view)
        {
            $toyname=$view['toyname'];
            $price=$view['price'];
            $quantity=$view['quantity'];
        }
        if($quantity==0)
        {
            echo "<script>alert('Sorry! Out Of Stock')</script>";
        }
        else{
        $tprice=$quan*$price;
        $r="insert into purchase values('$id','$toyname','$price','$quan','$tprice')";
        $connect->query($r);
        }
        

        // if($connect->query($r))
        // echo "<script>alert('Successfully added to the cart')</script>";
        // else
        // echo "<script>alert('Please Try Again!')</script>";
    }

    ?>

</div><br><br><br>
<a href="viewtoy.php" class="buy"><i class="fa-regular fa-eye"></i> View Cart</a>

<br><br><br><br>

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