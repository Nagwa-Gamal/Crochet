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
include 'template.php';

?>