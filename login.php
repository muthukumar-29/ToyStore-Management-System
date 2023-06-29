
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
        }
        .form{
            border:2px solid black;
            max-width: fit-content;
            padding:50px;
            border-radius:10px;
            margin-left:auto;
            margin-right:auto;
            margin-top:-2px;
            display:transparent;
            box-shadow:5px 5px rgba(0, 0, 0, 0.418);
        }
        .head {
            text-align:center;
            margin-top:110px;
            
        }
        body{
            background-color:#9276e099;
        }
        .form label{
          
           color:white;
        }
        .but{
            margin-left:100px;
            margin-top:-5px;
            border:2px solid black;
            border-radius:5px;
            padding:5px;
            width:55px !important;
            background-color: black;
            color:white;
            text-decoration:none;
        }
        .form input
        {
            width:250px;
            padding:5px;
            border-radius:10px;
            border-style:none;
        }
        .but:hover{
            background-color:yellow;
            color:black;
            
        }
        

    </style>
</head>
<body>
    <div class="head">
           <h1>Admin Login</h1><br>
    </div>
    
    <form method="post" class="form">
        
        <label>Mail id</label><br><input name="mail" type="email" placeholder="Enter your email"><br><br>
        <label>Password</label><br><input type="password" name="pass" placeholder="Enter your password"><br><br>
        <br><button name="login" class="but">Login</button>
        <br>
        
    </form>
    <?php
    if(isset($_POST['login']))
    {
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];
        $connect=mysqli_connect("Localhost","root","","toystore");
        $q="SELECT * FROM login";
        $value=$connect->query($q);
        foreach($value as $v)
        {
            $v['email'];
            $v['password'];
        }
        if($mail=="admin@gmail.com" && $pass==$v['password'])
        {
            header("Location:admin.php");
        }
        // elseif($mail==$v['email'] && $pass=$v['password'])
        // {
        //     header("Location:toystore.php");
        // }
        else{
            echo "<script>alert('Wrong Password Please! Try Again')</script>";
        }
    }
?>

</body>
</html>