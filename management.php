<?php
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
 $n = $p = false;
if (isset($_POST['submit'])) {
        if (empty($_POST['email'])) {
            $errors['email'] = 'Email is reqired';
            $n = true;
            alert("Required Email");
        }
        if (empty($_POST['password'])){
                $errors['password'] = 'password is reqired';
                $p = true;
                alert("Required Password");
            } 
              $email = $_POST['email'];
              $password = $_POST['password'];
              if($email==='admin@gmail.com'&&$password==='12345678'){
                header('Location: dbModification.php');
              }
              else{
                alert("Your Email or Password is invalid");
              }
} 
                
$title="Management";
$link1='<span class="unactive item">Home</span>';
$link2='<span class="nav-items unactive item">Shop</span>';
$link3='<span class="nav-items unactive item">About US</span>';
$link4='<span class="nav-items nav-active-item item">Management</span>';
$content='<form method="POST">
<div class="admin-form-content">
        <input type="email" name="email" placeholder="Email" class="input" id="admin-email">
        <br>
        <input type="password" name="password" placeholder="Password"  class="input" id="admin-password">
        <br>
        <button type="submit" class="admin-login-btn" name="submit" id="admin-login-button">Login</button>
</div> 
</form>';
include 'template.php';

?>