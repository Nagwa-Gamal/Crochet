<?php



require 'Model/Credentials.php';
$sql = "SELECT * FROM product WHERE type='clothes'";
$result = $conn->query($sql);
$cont="";
if ($result->num_rows > 0) {
$cont='
<div id="product" class="container"  style="margin-bottom:auto; height:auto;">
<h1>Look For Clothes</h1>
<hr>';
    // output data of each row
 
    while($row = $result->fetch_assoc()) {

      
        $cont.= '




 
     

            <div class="card"style="height:300px;width:350px;margin-left:10px;  float:left; margin-bottom:2px;">
                                         <img  style="height:280px;width:350px;" src='.$row["img"].'>
  

                <div class="product-overlay" >
                    <div class="labels">
                        <label>ID: '.  $row["id"] .'</label>
                        <br>
                        <label>type: Clothes</label>
                        <br>
                        <label>Size: '.$row["size"].'</label>
                        <br>
                        <label>Price: '.$row["price"].'</label>
                        <br>
                        <label>Country: '.$row["country"].'</label>
                       
                        <hr>
                        <a href="adduser.php"><button class="pur-btn" id="pur-button" >pur</button></a>
                    </div>
                </div>
            </div>';
        }
  $cont.='  </div>';
       
} 

$conn->close();
$type='clothes';

$title="clothes";
$content=$cont ;

include 'template.php';
?>