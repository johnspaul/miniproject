<!doctype html>
<meta charset="utf-8">
<html>
    <head>
    <link rel="stylesheet" href="css/products.css">
        <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
    </head>
<body>
    <div id="head"><img id="logo" src="images/logo2.png"> <a href="#">IFT<span id="aa">A</span>GIFT</a></div>
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