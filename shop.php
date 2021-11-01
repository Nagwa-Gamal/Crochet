<?php
$title="Shop";
$link1='<span class="unactive item">Home</span>';
$link2='<span class="nav-items nav-active-item item">Shop</span>';
$link3='<span class="nav-items unactive item">About US</span>';
$link4='<span class="nav-items unactive item">Management</span>';
$content='<div id="shop" class="container">
<h1>Look For Shoping</h1>
<hr>
<div class="row" style="margin-top: 80px;">
    <div class="col-4">
            <!-- the card 1-->
        <div class="card">
            <img src="image/product/cl1.jpg" class="card-img-top " alt="..." style="width: 100%; height: 250px;" >
            <div class="card-body">
                <a href="clothes.php" class="shop-btn shop-btn-primary">Clothes</a>
            </div>
        </div>
    </div>

    <div class="col-4">
            <!-- the card 2-->
        <div class="card">
            <img src="image/product/b1.jpeg" class="card-img-top" alt="..." style="width: 100%; height: 250px;">
            <div class="card-body">
             
                <a href="bags.php" class="shop-btn shop-btn-primary">Bags</a>
            </div>
        </div>
    </div>

    <div class="col-4">
            <!-- the card 3-->
        <div class="card">
            <img src="image/product/m1.jpg" class="card-img-top" alt="..." style="width: 100%; height: 250px;">
            <div class="card-body">
                
                <a href="medals.php" class="shop-btn shop-btn-primary">Medals</a>
            </div>
        </div>
    </div>

 
</div>
<div class="row">
   <div class="col-4">
            <!-- the card 4-->
        <div class="card">
            <img src="image/product/mat1.jpeg" class="card-img-top" alt="..." style="width: 100%; height: 250px;">
            <div class="card-body">              
                <a href="mattresses.php" class="shop-btn shop-btn-primary">Mattresses</a>
            </div>
        </div>
    </div>
    <div class="col-4">
            <!-- the card 5-->
        <div class="card">
            <img src="image/product/t1.jpg" class="card-img-top" alt="..." style="width: 100%; height: 250px;">
            <div class="card-body">           
                <a href="toys.php" class="shop-btn shop-btn-primary">Toys</a>
            </div>
        </div>
    </div>
</div>
</div>';
include 'template.php';

?>