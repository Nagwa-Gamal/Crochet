<?php
require ("Model/credentials.php");
    if (isset($_POST['add1'])) {
        if(empty($_POST['types'])){
            alert("Enter The Type Please");
        }
        else{
            // add type
            $type=$_POST['types'];
            $connection = mysqli_connect($host, $user, $passwd, $database);
            //check connection
            if (!$connection) {
                echo 'Error in connection : '.mysqli_connect_error();
            }
            $query = sprintf("INSERT INTO type (types) VALUES ('%s')",
            mysqli_real_escape_string($connection,$type));
            mysqli_query($connection,$query) or die(mysqli_error($connection));
            mysqli_close($connection);
        }
    }
    if(isset($_POST['delete1'])) {
        if(empty($_POST['types'])){
            alert("Enter The Type Please");
        }
        else{
             // delete type
            $type=$_POST['types'];
            $connection = mysqli_connect($host, $user, $passwd, $database);
        //check connection
        if (!$connection) {
            echo 'Error in connection : '.mysqli_connect_error();
        }
            $query ="DELETE FROM type WHERE types = '$type'";
            mysqli_query($connection,$query) or die(mysqli_error($connection));
            mysqli_close($connection);
        }
       
    }

    if (isset($_POST['add2'])) {
            if(empty($_POST['type'])||empty($_POST['price'])||empty($_POST['country'])||empty($_POST['image'])||empty($_POST['size'])){
                alert("Enter All Data Please");
            }
            else{
        // add product
       // $id=$_POST['ID'];
        $type=$_POST['type'];
        $price=$_POST['price'];
        $country=$_POST['country'];
        $img=$_POST['image'];
        $size=$_POST['size'];
    $connection = mysqli_connect($host, $user, $passwd, $database);
        //check connection
        if (!$connection) {
            echo 'Error in connection : '.mysqli_connect_error();
        }
        
        $query = sprintf("INSERT INTO product
                          (type, price,country,img,size)
                          VALUES
                          ('%s','%s','%s','%s','%s')",
               // mysqli_real_escape_string($connection,$id),
                mysqli_real_escape_string($connection,$type),
                mysqli_real_escape_string($connection,$price),
                mysqli_real_escape_string($connection,$country),
                mysqli_real_escape_string($connection,"image/product/" . $img),
                mysqli_real_escape_string($connection,$size));
                mysqli_query($connection,$query) or die(mysqli_error($connection));
                mysqli_close($connection);      
            }
    }
   if (isset($_POST['update'])) {
    if(empty($_POST['ID'])||empty($_POST['type'])||empty($_POST['price'])||empty($_POST['country'])||empty($_POST['image'])||empty($_POST['size'])){
        alert("Enter All Data Please");
    }
            else{
        // update product
        $id=$_POST['ID'];
        $type=$_POST['type'];
        $price=$_POST['price'];
        $country=$_POST['country'];
        $img=$_POST['image'];
        $size=$_POST['size'];
        $connection = mysqli_connect($host, $user, $passwd, $database);
        //check connection
        if (!$connection) {
            echo 'Error in connection : '.mysqli_connect_error();
        }
        $query = sprintf("UPDATE product
                            SET  type = '%s', price = '%s', country = '%s',
                            img = '%s', size = '%s'
                          WHERE id = $id",
                mysqli_real_escape_string($connection,$type),
                mysqli_real_escape_string($connection,$price),
                mysqli_real_escape_string($connection,$country),
                mysqli_real_escape_string($connection,"image/product/" . $img),
                mysqli_real_escape_string($connection,$size));
                mysqli_query($connection,$query) or die(mysqli_error($connection));
                mysqli_close($connection);
            }
    }
 if (isset($_POST['delete2'])) {
        if(empty($_POST['ID'])){
            alert("Enter ID Please");
        }
            else{
                // delete product
                $id=$_POST['ID'];
                $connection = mysqli_connect($host, $user, $passwd, $database);
                //check connection
                if (!$connection) {
                    echo 'Error in connection : '.mysqli_connect_error();
                }
        $query = "DELETE FROM product WHERE id = $id";
        mysqli_query($connection,$query) or die(mysqli_error($connection));
        mysqli_close($connection);
    }

    }

   /* if(isset($_POST['adduser']))
    {
        if(empty($_POST['id'])||empty($_POST['name'])||empty($_POST['phone']))
             alert("please complete your information");
         else
         {
            $id=$_POST['id'];
            $name=$_POST['name'];
            $phone=$_POST['phone'];
       
        $query = sprintf("INSERT INTO users(product_id,name,phone_num)
                          VALUES
                          ('%s','%s','%s')",
                mysqli_real_escape_string($connection,$id),
                mysqli_real_escape_string($connection,$name),
                mysqli_real_escape_string($connection,$phone));
                
       // $this->PerformQuery($query);
         mysqli_query($connection,$query) or die(mysqli_error($connection));
                mysqli_close($connection);
         }

    }*/
    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }
    function GetImages() {
        //Select folder to scan
        //bags
        $handle = opendir("image/product");

        //Read all files and store names in array
        while ($image = readdir($handle)) {
            $images[] = $image;
        }

        closedir($handle);

        //Exclude all filenames where filename length < 3
        $imageArray = array();
        foreach ($images as $image) {
            if (strlen($image) > 2) {
                array_push($imageArray, $image);
            }
        }

        

       
        //Create <select><option> Values and return result
        $result = CreateOptionValues($imageArray);
        return $result;
    }
$title="Management";
$link1='<span class="unactive item">Home</span>';
$link2='<span class="nav-items unactive item">Shop</span>';
$link4='<span class="nav-items nav-active-item item">Management</span>';
$content='   <section>
            
<div id="div1" class="container">
    <div class="row">
        <div class="col-4">
            <form method="POST" name="form1">
                <label style=" margin-left:10px;">type :</label><br>
                <input style=" margin-left:10px;" type="text" placeholder="enter the type" name="types">
                <button Type="submit" name="add1">Add</button>
                <button Type="submit" name="delete1">Delete</button>
            </form>
        </div>
    
    
        <div class="col-8"> 
            <form method="POST" name="form2">
                    <h2>Data of product</h2>
                <div class="row" >
                    <div class="col-6">
                        <label>ID :</label><br>
                        <input type="text" placeholder="enter the ID" name="ID">
                        <label>Type :</label><br>
                        <input type="text" placeholder="enter the Type" name="type">
                        <label>Price :</label><br>
                        <input type="text" placeholder="enter the Price" name="price">
                    </div>
                    <div class="col-6" style="padding-right:50px;">
                        <label>Country :</label><br>
                        <input type="text" placeholder="enter the Country" name="country">
                         <label>Image :</label><br>
                         <select name="image">';
                         $content=$content .  GetImages();

                          $content=$content .'</select>
                         <label>Size :</label><br>
                        <input type="text" placeholder="enter the Size" name="size">
                        
                    </div>
                        <button Type="submit" name="add2" style="margin-left: 15px;">Add</button>
                        <button Type="submit" name="update">Update</button>
                        <button Type="submit" name="delete2">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>';

include 'template.php';
?>