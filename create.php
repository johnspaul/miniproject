<?php
error_reporting(E_ALL);

?>
<!doctype html>
<meta charset="utf-8">
<html>
    <link rel="stylesheet" href="css/products.css">
    <script src="jquery-2.1.1.js"></script>
    <body>
        
       
    <form enctype="multipart/form-data" method="post" action="upload.php">
    <label for="gname">Gift name</label><input type="text" name="gname">
  <input type="file" size="32" name="image_field" value="">
  <input type="submit" name="Submit" value="upload">

        </form>
        
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
        ?>
     
    <script type="text/javascript">
      $('.box').on('click',function(){
          var a=$(this).children('a').children('span.gid').html();
      
          window.location.href="edit.php?gid="+a;
      });

    </script>   
        
    </ul>
    </div>
        
    </body>
    <style>
    #up
        {
            display:block;
            position:absolute;
            top:20%;
            font-family: 
sans-serif;
        }
    </style>
</html>