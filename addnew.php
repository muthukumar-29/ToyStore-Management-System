<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="add.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <div class="head">
        <h1>ADMIN</h1>
    </div> 

    <div class="menu">
        <a href="admin.php"><i class="fa-solid fa-house"></i> Dashboard</a>
        <a href="addnew.php"><i class="fa-solid fa-plus"></i> Addnew</a>
        <a href="user-detail.php"><i class="fa-solid fa-users"></i> User Details</a>
        <a href="settings.php"><i class="fa-solid fa-gear"></i> Settings</a>
    </div>


    <form method="post" enctype="multipart/form-data">
        
        <button class="del" type="submit" name="delete"><i class="fa-solid fa-trash"></i></button>
        <button class="edit" type="submit" name="edit"><i class="fa-solid fa-pen-to-square"></i> edit</button>
        <br><br>
    <div class="add">
        <table>
            <tr>
                <th>Toy Image</th>
                <th>Toy Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
            <tr>
                <td><input type="file" name="toypic"></td>
                <td><input type="text" name="toyname" placeholder="Enter Toy name"></td>
                <td><input type="number" name="price" placeholder="Enter Toy Price" min="0"></td>
                <td><input type="number" name="quantity" placeholder="Enter the Quantity" min="0"></td>
            </tr>
        </table><br>
        <button type="submit" name="submit" class="submit"><i class="fa-solid fa-plus"></i> Add</button>
    </div>
    <?php
    if(isset($_POST['submit']))
    {
        $id=0;
        $img=$_FILES['toypic']['name'];
        // $target="uploads/".$img;
        // move_uploaded_file($_FILES['toyimage']['tmp_name'],$target);
        $toyname=$_POST['toyname'];
        $price=$_POST['price'];
        $quantity=$_POST['quantity'];
        $connect=mysqli_connect("Localhost","root","","toystore");
        if($connect->connect_error)
        echo "<script>alert('Connection Failed! Try Again')</script>";
        $q="INSERT INTO addnew VALUES('$id','$img','$toyname','$price','$quantity')";
        if($connect->query($q))
        {
            echo "<script>alert('Added Successfully')</script>";
        }
        else{
            echo "<script>alert('Failed! Try Again')</script>";
        }
    }
    
    if(isset($_POST['delete']))
    {
        $toyname=$_POST['toyname'];
        $connect=mysqli_connect("Localhost","root","","toystore");
        if($connect->connect_error)
        echo "<script>alert('Connection Failed! Try Again')</script>";
        $q="DELETE FROM addnew WHERE toyname='$toyname'";
        if($connect->query($q))
        {
            echo "<script>alert('Deleted Successfully')</script>";
        }
        else{
            echo "<script>alert('Failed! Try Again')</script>";
        }
    }

    if(isset($_POST['edit']))
    {
        $img=$_FILES['toypic']['name'];
        $toyname=$_POST['toyname'];
        $price=$_POST['price'];
        $quantity=$_POST['quantity'];
        $connect=mysqli_connect("Localhost","root","","toystore");
        if($connect->connect_error)
        echo "<script>alert('Connection Failed! Try Again')</script>";
        $q="UPDATE addnew SET toypic='$img',price='$price',quantity='$quantity' WHERE toyname='$toyname'";
        if($connect->query($q))
        {
            echo "<script>alert('Updated Successfully')</script>";
        }
        else{
            echo "<script>alert('Failed! Try Again')</script>";
        }
    }
    ?>

</form>
</body>
</html>