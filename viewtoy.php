<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="view.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buying</title>
</head>
<body>
    
    <script>
        // var price=document.getElementById("price");
        // var quantity=document.getElementById("quantity");
        // var total=price*quantity;
        // document.getElementById("total").innerHTML=total.innerHTML;
    </script>


    <div class="head">
    <img src="uploads/wired-lineal-146-basket-trolley-shopping-card.gif" alt="logo" width="75" heigth="70">
    <h1>PRODUCT LIST</h1>
    </div><br><br><br>
    <?php $connect=mysqli_connect("Localhost","root","","toystore"); 
        $q="select * from purchase";
        $rowcount=0;
        $s=$connect->query($q);
    ?>
    <label></label>
    <form method="post">
        <table class="user-detail">
        <tr>
            <td>Name</td>
            <td><input type="text" name="uname" placeholder="Enter your name" required></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="phone" placeholder="Enter your Phone Number" pattern="[0-9]+" maxlength="10" required></td>
        </tr>
    </table>
<br><br><br>

    <table class="product-detail">
        <tr>
            <th>ID</th>
            <th>TOY NAME</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>TOTAL PRICE</th>
        </tr>
        <?php
        $total=0;
        foreach($s as $m)
        { ?>
        <tr>
            <td><?php echo $id=$m['id']; ?></td>
            <td><?php echo $toyname=$m['toyname']; ?></td>
            <td id="price"><i class='fa-sharp fa-solid fa-indian-rupee-sign'></i><?php echo $price=$m['price']; ?></td>
            <td><?php echo $m['quantity']; ?></td>
            <td><?php echo $m['tprice'] ?></td>
        </tr>
        <?php
        }
        ?>
        
        </table>
        <br><br>
        <label class="total" id="total">Total price : </label><div class="tot"><i class='fa-sharp fa-solid fa-indian-rupee-sign'></i><span id="tot">
        <?php 
            $amount=0;
            $quantity=0;
            $m="select tprice,quantity from purchase"; 
            $n=$connect->query($m);
            foreach($n as $val)
            {
                $amount+=$val['tprice'];
                $quantity+=$val['quantity'];
            }
            echo $amount;
        ?>
         </span></div><br><br><br>
        <button class="buy" type="submit" name="buy"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
        <br><br><br>
        
        <?php 
        if(isset($_POST['buy']))
        {
            $id=0;
            $uname=$_POST['uname'];
            $phone=$_POST['phone'];
            $query="insert into buy values('$id','$uname','$phone','$quantity','$amount')";
            $connect->query($query);

            $qu="select id,quantity from purchase";
            $rows=$connect->query($qu);
            foreach($rows as $val)
            {
                $que="update addnew set quantity=quantity-'$val[quantity]' where id='$val[id]'";
                $connect->query($que);
            }

            $query1="delete from purchase";
            $connect->query($query1);

            echo "<script>alert('Thankyou for Buying!')</script>";

        }
        ?>

        </form>

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