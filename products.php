<!doctype html>
<meta charset="utf-8">
<html>
    <head>
    <link rel="stylesheet" href="css/products.css">
        <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    </head>
<body>
    <div id="top"><a href="#">login|signup</a></div>
    <div id="head"> <a href="#">GIFT<span id="aa">A</span>GIFT</a><img id="logo" src="images/logo2.png"></div>
    <?php
    
$db=mysqli_connect('localhost','root','','giftagift')OR DIE('cannot connect');
    mysqli_select_db($db,'giftagift');
    $sql="select * from products";
$res=mysqli_query($db,$sql);
    $count=mysqli_num_rows($res);
    ?>
    <ul class="gifts">
        <?php
    while($row=mysqli_fetch_array($res))
    {
    ?>
        <li class="box">
    <a href="#">
        <img src="<?php echo $row['gimage']; ?>">
       <img id="cart" src="images/cart-add-icon.png" width="40px">
             <h4> <?php echo $row['gname']; ?></h4>
            </a>
        </li>
    <?php
    }
        ?>
        <script>
    
        </script>
    </ul>
    </body>
</html>