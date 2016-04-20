<!doctype html>
<html>
    <head>
    </head>
    <body>
<nav><?php

include_once('index.php');
?>
</nav>
<div id="checkout">
<div id="head1">Enter the delivery address</div>
<form method="post" action="checkedout.php">
Recievers name:<input type="text" name="recname">
    Recievers address:<input type="text" name="field1">
    <input type="text" name="field2">
    Pincode:<input type="number" name="pinc" value="<?php echo $_SESSION['pincode']; ?>">
    <input type="submit" name="submit" value="PAY">
</form>
        </div>
    </body>
</html>
<style type="text/css">
    #head1
    {
        margin-bottom: 
            20px;
        opacity:.8;
    }
    nav
    {
     
    }
    #checkout
    {
        position:absolute;
        display:block;
        margin-top: 
            10%;
        font-family: 
            'sans-serif';
        margin-left: 
            30%;
        
    }
    #checkout input[type=text],input[type=number]
    {
        width:250px;
        background-color: 
            white;
        box-shadow: 
            none;
        border-color: 
            none;
        border-radius: 
            3px;
        height:10px;
    }
</style>
<?php

?>