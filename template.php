<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Acme|Arizonia|Lobster|Pacifico|Courgette&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $title; ?></title>
</head>
<body >
    <!--page cover-->
    <header>
        <div class="cover-overlay">
        </div>
     
    </header>
    <!--Navbar-->
    <nav id="my-navbar">
            <img src="image/header.jpg" id="cover">
            <h1 class="nav-h1-2" id="website">Hand<span>Made</span></h1>
        <div class="container" id="navlinks">
                <ul >
                    <li >
                        <a href="home.php"  ><?php echo $link1?>  </a>
                    </li>
                    <li >
                        <a href="shop.php"  ><?php echo $link2?></a>
                    </li>
                    <li >
                        <a href="management.php"  ><?php echo $link4?></a>
                    </li>
                </ul>
        </div>
    </nav>
    <div id="content-area" style="width:100%; height: auto; overflow: auto; margin-bottom: 50px; overflow: hidden;">
        <?php echo $content; ?>
    </div>
    <!--Footer-->
<footer>
        <div class="icons">
            <div class="icon"><a href="#"><span class="span-i"><i class="fa fa-facebook " aria-hidden="true"></i></span></a></div>
            <div class="icon"><a href="#"><span class="span-i"><i class="fa fa-twitter " aria-hidden="true"></i></span></a></div>
            <div class="icon"><a href="#"><span class="span-i"><i class="fa fa-instagram " aria-hidden="true"></i></span></a></div>
            <div class="icon"><a href="#"><span class="span-i"><i class="fa fa-google" aria-hidden="true"></i></span></a></div>
        </div>
    </footer>
    <script src="js/javaScript1.js"></script> 
    <script src="js/javaScript2.js"></script> 
</body>
</html>