<?php
session_start();
$userid=$_SESSION['id'];
$string=$_POST['stringjson'];
$image=$_POST['imagejpeg'];

//echo $string;
$host="localhost";
$username="root"; 
$password=""; 
$db_name="giftagift"; 
$tbl_name="cards"; 
$db=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($db,"$db_name")or die("cannot select DB");
$sql="insert into $tbl_name(userid,jsonstring,image) values('$userid','$string','$image')";
//echo $sql;
$res=mysqli_query($db,$sql);
    if($res)
        echo 'success';
else
    echo 'unsuccessful';
//$image=str_replace('data:image/png;base64,','/',$image);
//$image = str_replace(' ', '+', $image);
//echo $image;
?>
<img src="<?php echo $image; ?>">
<?php
//$imagebin=base64_decode($image);
//$code=imagecreatefromstring($imagebin);
//header('content-type:image/png');
//imagepng($code);
?>
<html>
    <head>
    <script src="js/fabric.min.js" type="text/javascript"></script>
    </head>
<body>
    <canvas id="canvas"></canvas>
    <div id="insert"></div>
     <script type="text/javascript">
         var canvas = new fabric.Canvas('canvas');
canvas.setHeight(480);
canvas.setWidth(640);
var mystring = <?php echo json_encode($string); ?>;        alert(mystring);
        
        //document.write(string);
    var json=JSON.parse(mystring);
        
        canvas.loadFromJSON(json, function() {

  // making sure to render canvas at the end
  canvas.renderAll();

  // and checking if object's "name" is preserved
  console.log(canvas.item(0).name);
        });
        
    </script>
    </body>
</html>


   
<style>
#canvas
{
    border-color: black;
display: block;
border:1px solid black;
vertical-align: middle
}
</style>