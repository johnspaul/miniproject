    
<html>
    <head> <script src="js/fabric.min.js" type="text/javascript"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/edit.css">
    </head>
<nav>
    <?php
include_once('navigation.html');
?>
    </nav>
    <div id="upload">
	<form id="uploadImg" runat="server">
  <input type="file" id="uploadedImg"/>
        </form></div>
       <span  id="text-btn">T</span>
    <div id="cropB">CROP</div>
<canvas id="canvas"></canvas>
        <input type="button" id="save-btn" value="save">
<form method="post" action="save.php" id="formjson" >
    <input type="text" id="stringjson" name="stringjson" value="">
    <input id="imagejpeg" value="" name="imagejpeg">
    </form>
<script type="text/javascript">
    document.getElementById('save-btn').onclick=function()
    {
var json = canvas.toJSON();
        var data=JSON.stringify(json);
        var dataurl=canvas.toDataURL("image/jpeg");
        document.getElementById('imagejpeg').value= dataurl;
        document.getElementById('stringjson').value= data;
        document.getElementById('formjson').submit();
canvas.clear();
         json=JSON.parse(data);
        canvas.loadFromJSON(json, function() {
var dataurl=canvas.toDataURL("image/jpeg");
  // making sure to render canvas at the end
  canvas.renderAll();

  // and checking if object's "name" is preserved
  console.log(canvas.item(0).name);
});
       //alert(data);
    };
    var canvas = new fabric.Canvas('canvas');
canvas.setHeight(480);
canvas.setWidth(640);
document.getElementById('uploadImg').onchange = function handleImage(e) {
var reader = new FileReader();
  reader.onload = function (event){
    var imgObj = new Image();
    imgObj.src = event.target.result;
    imgObj.onload = function () {
      var image = new fabric.Image(imgObj);
      image.set({
            angle: 0,
            padding: 10,
            cornersize:10,
            height:110,
            width:110,
      });
      
      canvas.centerObject(image);
      canvas.add(image);
      canvas.renderAll();
    }
  }
  reader.readAsDataURL(e.target.files[0]);
}
  document.getElementById('text-btn').onclick=function(){canvas.add(new fabric.IText('Tap and Type', { 
  fontFamily: 'arial black',
  left: 0, 
  top: 0 ,fontSize:20,
            fill:'#000'
}))};
    
document.getElementById('#cropB').onclick=function() {
    image.selectable = true;
    disabled = true;
    rectangle.visible = false;
    var cropped = new Image();
    cropped.src = canvas.toDataURL({
        left: rectangle.left,
        top: rectangle.top,
        width: rectangle.width,
        height: rectangle.height
    });
    cropped.onload = function() {
        canvas.clear();
        image = new fabric.Image(cropped);
        image.left = rectangle.left;
        image.top = rectangle.top;
        image.setCoords();
        canvas.add(image);
        canvas.renderAll();
    };
};
    
    document.getElementById('save-btn').onclick=function()
    {
//var json = canvas.toJSON();

        
        alert("hi");
    };
  
    </script>
</html>