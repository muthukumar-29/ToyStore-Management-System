<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="newadmin.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <!-- <script>
        function drop(){
            document.get
        } 
    </script> -->

    <div class="head">
        <h1>ADMIN</h1>
        <div class="dropdown">
            
            <p class="profile"><i class="fa-solid fa-circle-user fa-2xl"></i> Profile</p>
            <div class="mydrop">
            <a href="login.php" style="color:black"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
            
        </div>
        <!-- <div class="dropdown">
                <button class="btn text-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-circle-user fa-2xl"></i> Profile
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="login.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                </ul>
        </div> -->
    </div> 

    <div class="menu">
        <a href="#dashboard"><i class="fa-solid fa-house"></i> Dashboard</a>
        <a href="addnew.php"><i class="fa-solid fa-plus"></i> Addnew</a>
        <a href="user-detail.php"><i class="fa-solid fa-users"></i> User Details</a>
        <a href="settings.php"><i class="fa-solid fa-gear"></i> Settings</a>
    </div>

    <div class="dash">
        <div class="dash1">
            <img src="uploads/4116.jpg">
            <p>Total Stock</p>
            <span id="stock"><?php 
            $v=0;
            $v1=0;
            $connect=mysqli_connect("Localhost","root","","toystore");
            $q="select quantity from addnew";
            $view=$connect->query($q);
            foreach($view as $value)
            {
                $v=$v+$value['quantity'];
            }
            $q1="select quantity from buy";
            $view1=$connect->query($q1);
            foreach($view1 as $value1)
            {
                $v1=$value1['quantity'];
            }
            $fvalue=$v-$v1;
            echo $fvalue;
            ?></span>
        </div>
        <div class="dash2">
            <img src="uploads/3964880.jpg">
            <p>Total Sales</p>
            <span id="sales">
            <?php
            $g=0;
            $a="select quantity from buy";
            $b=$connect->query($a);
            foreach($b as $c)
            {
                $g+=$c['quantity'];
            } 
            echo $g;
            ?>
            </span>
        </div>
        <div class="dash3">
            <img src="uploads/80_Z29vZF9iYWRfYmVoYXZpb3VyLTEz.jpg">
            <p>Happy Users</p>
            <span id="happyuser">
            <?php
                $k="select count(id) from buy";
                $m=$connect->query($k);
                foreach($m as $n)
                {
                    echo $n['count(id)'];
                }
            ?>
            </span>
        </div>
    </div>
</body>
</html>