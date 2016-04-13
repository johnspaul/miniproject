
<meta charset="utf-8">
<html>
    <head>
        <link rel="stylesheet" href="index.css">
          <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
         <div id="top"><a href="#" id="login-btn"><?php 
             session_start();
             if(!isset($_SESSION['username']))
                 echo 'LOGIN|SIGNUP' ;
             else 
                 echo 'welcome'.$_SESSION['username'];
             ?>
             </a></div>
    <div id="head"> <a href="#">GIFT<span id="aa">A</span>GIFT</a><img id="logo" src="images/logo2.png">
        
  <div class="container-1">
      <span class="icon"><img src="images/search.png" width="22px"></span>
      <input type="search" id="search" placeholder="Search..." />
  </div>
        <span id="cart-btn"><img src="images/cart.png" width="30px"><h1>CART</h1></span>
        </div>
           <div id="home-image"></div>
        <div id="login">
        <form method="post" action="index.php">
            Username<input type="text" name="login-name">
            Password<input type="password" name="login-pass">
            <input type="submit" name="submit">
            </form>
        </div>
     
     
      <!--  <div id="part2"> 
        <div id=""></div>
        </div>
        -->
        <script type="text/javascript">
        document.getElementById('login-btn').onclick=function(){
            
            document.getElementById('login').style.display='block';
        };
            </script>
            <?php
//error_reporting(E_ALL^E_NOTICE);
if(isset($_POST['submit']))
{
$host="localhost";
$username="root"; 
$password=""; 
$db_name="giftagift"; 
$tbl_name="users"; 
$db=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($db,"$db_name")or die("cannot select DB");
$myusername=$_POST['login-name']; 
$mypassword=$_POST['login-pass']; 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($db,$myusername);
$mypassword = mysqli_real_escape_string($db,$mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$res=mysqli_query($db,$sql);
$count=mysqli_num_rows($res);
$rows=mysqli_fetch_array($res);

    if($count==1){
    
session_start();
$_SESSION['username']=$myusername;
$_SESSION['password']=$mypassword;
$_SESSION['id']=$rows['userid'];
echo 'success'; 
//if($rows['type']==1)
//header("location:adminprofile.php");
//else
//header("location:volunteerprofile.php");
}
    else
        echo 'unsuccesful';

}
?>
        
    </body>
</html>
