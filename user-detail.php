<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="user.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER DETAILS</title>
</head>
<body>
<div class="head">
        <h1>ADMIN</h1>
    </div> 

    <div class="menu">
        <a href="admin.php"><i class="fa-solid fa-house"></i> Dashboard</a>
        <a href="addnew.php"><i class="fa-solid fa-plus"></i> Addnew</a>
        <a href="#userdetail"><i class="fa-solid fa-users"></i> User Details</a>
        <a href="settings.php"><i class="fa-solid fa-gear"></i> Settings</a>
    </div>

    <h1 class="user-head">HAPPY USERS</h1>

    <div class="detail">
        <table>
            <tr>
                <th>ID</th>
                <th>USER NAME</th>
                <th>PHONE NUMBER</th>
                <th>PURCHASE AMOUNT</th>
            </tr>
            <?php
                $connect=mysqli_connect("Localhost","root","","toystore");
                $q="select * from buy";
                $values=$connect->query($q);
                foreach($values as $m){
            ?>
            <tr>
                <td><?php echo $m['id']; ?> </td>
                <td><?php echo $m['uname']; ?> </td>
                <td><?php echo $m['phone']; ?> </td>
                <td><?php echo $m['tprice']; ?> </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>