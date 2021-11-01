<?php
$title="Pur Page";
$link1='<span class="unactive item">Home</span>';
$link2='<span class="nav-items nav-active-item item">Shop</span>';
$link3='<span class="nav-items unactive item">About US</span>';
$link4='<span class="nav-items unactive item">Management</span>';
$content='<form method="POST" action="">
<div class="user-form-content">
        <input type="text" placeholder="Product ID" name="id" class="input" id="product-id"  >
        <br>
        <input type="text" placeholder="Your Name"  name="name"class="input" id="user-name"  >
        <br>
        <input type="text" placeholder="Phone Number" name="phone" class="input" id="user-number"  >
        <br>
        <button class="user-login-btn" id="user-login-button" name="adduser"  >Pur</button>
</div> 
</form>';
require ("Model/credentials.php");
    if (isset($_POST['adduser'])) {
        if(empty($_POST['id'])||empty($_POST['name'])||empty($_POST['phone'])){
            alert("Enter all info please");
        }
        else{
            // add type
            $id=$_POST['id'];
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $connection = mysqli_connect($host, $user, $passwd, $database);
            //check connection
            if (!$connection) {
                echo 'Error in connection : '.mysqli_connect_error();
            }
            $query = sprintf("INSERT INTO users (product_id,name,phone_num) VALUES ('%s','%s','%s')",
            mysqli_real_escape_string($connection,$id),
                mysqli_real_escape_string($connection,$name),
                    mysqli_real_escape_string($connection,$phone)
        );
            mysqli_query($connection,$query) or die(mysqli_error($connection));
            mysqli_close($connection);
        }
    }
include 'template.php';

?>