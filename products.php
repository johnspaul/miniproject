<!doctype html>
<meta charset="utf-8">
<html>
    <head>
    <link rel="stylesheet" href="css/products.css">
        
        <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="waves.css" rel="stylesheet">
        <script src="jquery-2.1.1.js"></script>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    </head>
<body>
        
    <nav>
        <?php
    include_once('index.php');
        ?>
    </nav>
    <div id="products">
    <?php
    
$db=mysqli_connect('localhost','root','','giftagift')OR DIE('cannot connect');
    $table='products';
    mysqli_select_db($db,'giftagift');
    
    $sql="select * from $table";
$res=mysqli_query($db,$sql);
    $count=mysqli_num_rows($res);
    ?>
    <ul class="gifts">
        <?php
    while($row=mysqli_fetch_array($res))
    {
    ?>
        <li class="box waves-effect" id="bx1">
    <a href="#">
        <img src="<?php echo $row['gimage']; ?>">
        <span class="gid"><?php echo $row['gid']; ?></span>
       <!--<img id="cart" class="cart" src="images/cart-add-icon.png" width="40px">
           -->  <h4> <?php echo $row['gname']; ?></h4>
        <span><?php echo $row['']; ?></span>
            </a>
        </li>
    <?php
    }
        ?>
     
    <script type="text/javascript">
      $('.box').on('click',function(){
          var a=$(this).children('a').children('span.gid').html();
      
          window.location.href="details.php?gid="+a;
      });
$('.cart').on('click',function(){
  var ab=$(this).siblings('span.gid').html();  
window.location.href="addtocart.php?gid="+a;
});
    </script>   
        
    </ul>
    </div>

    </body>
    <script type="text/javascript">
      

    </script>
</html>