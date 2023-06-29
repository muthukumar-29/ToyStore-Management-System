<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Geologica:wght@900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Geologica&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap');

        *{
            font-family: 'Geologica', sans-serif;
        }
        .head{
            padding: 5px;
            font-family: 'Geologica', sans-serif;
            background-color: black;
            color: white;
        }
        .head h1{
            margin-left: 50px;
        } 
        .menu{
            display: flex;
            flex-direction: column;
            height: 650px;
            width: 20%;
            background-color: #9376E0;
        }
        .menu a{
            text-decoration: none;
            border: 2px solid black;
            padding: 10px;
            width: 150px;
            border-radius: 10px;
            color: black;
            background-color: #FFE7A0;
            margin-top: 50px;
            margin-left: 30px;
        }
        .menu a:hover{
            transition: 0.5s;
            background-color: #30A2FF;
            margin-left: 60px;
        }
        .set{
            border: 2px solid black;
            border-radius: 30px;
            max-width: fit-content;
            padding: 30px;
            margin-left: 450px;
            margin-top: -500px;
        }
        .set input{
            padding: 6px;
            width: 250px;
        }
        .set button{
            margin-left: 600px;
            padding: 6px;
            border-style: none;
            border-radius: 5px;
        }
        .set button:hover{
            background-color: grey;
        }
    </style>
</head>
<body>
<div class="head">
        <h1>ADMIN</h1>
    </div> 

    <div class="menu">
        <a href="admin.php"><i class="fa-solid fa-house"></i> Dashboard</a>
        <a href="addnew.php"><i class="fa-solid fa-plus"></i> Addnew</a>
        <a href="user-detail.php"><i class="fa-solid fa-users"></i> User Details</a>
        <a href="#settings"><i class="fa-solid fa-gear"></i> Settings</a>
    </div>

    <form method="post">
    <div class="set">
        <h1>Update Admin Area<h1>
        <input type="email" name="a-email" placeholder="Enter Email ID" required>
        <input type="password" name="a-pass" placeholder="Enter the password" required style="margin-left: 150px;"><br><br>
        <button type="submit" name="update">Update</button>
    </div>
    </form>

    <?php
    if(isset($_POST['update']))
    {
        $email=$_POST['a-email'];
        $pass=$_POST['a-pass'];
        $connect=mysqli_connect("Localhost","root","","toystore");
        $q="update login set password='$pass' where email='$email'";
        if($connect->query($q))
        {
            echo "<script>alert('Successfully Updated')</script>";
        }
    }
    ?>
</body>
</html>