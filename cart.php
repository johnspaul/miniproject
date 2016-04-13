<html>
<head>
    <link rel="stylesheet" href="css/products.css">
            <script src="jquery-2.1.1.js"></script>
    </head>
    <body>
    <nav>
        <?php
    include_once('index.php');
        ?>
    </nav>
    <h2>CART</h2>
    <?php
    
    $userid=$_SESSION['id'];
    $db=mysqli_connect('localhost','root','','giftagift')OR DIE('cannot connect');
    $table='cart';
    mysqli_select_db($db,'giftagift');
    
    $sql="select gid from $table where userid='$userid'";
$res=mysqli_query($db,$sql);
    ?>
    
        <ul class="gifts">
        <?php
    while($rows=mysqli_fetch_array($res))
    {
        $gid=$rows['gid'];
        $sql1="select * from products where gid='$gid'";
        $res1=mysqli_query($db,$sql1);
        while($row=mysqli_fetch_array($res1))
        {
    ?>
        <li class="box" id="bx1">
    <a href="#">
        <img src="<?php echo $row['gimage']; ?>">
        <span class="gid"><?php echo $row['gid']; ?></span>
       <!--<img id="cart" class="cart" src="images/cart-add-icon.png" width="40px">
           -->  <h4> <?php echo $row['gname']; ?></h4>
            </a>
        </li>
      
    <?php
    }
    }
        ?>
        
        
    </ul>
               <script type="text/javascript">
      $('.box').on('click',function(){
          var a=$(this).children('a').children('span.gid').html();
 
          window.location.href="details.php?gid="+a;
      });
        </script>                   
    </body>
</html>