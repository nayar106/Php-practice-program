<html>
<head>
<style type="text/css">
.main{
   background-color:dcdcdc;
   padding:20px;
  width:25%;
  position:absolute;
left:30%;
top:50px;
}
div{
  margin-top:5px;
}
</style>
</head>
<body>
<form action="calScript.php" method="post">
<div class="main">
<div>
<input type="text" placeholder="Enter a number" name="fno">
</div>
<div>
<input type="text" placeholder="Enter Second number" name="sno">
</div>
<div>
<input type="submit" value="+">
</div>
<div>
<?php
if(isset($_GET["res"]))
echo $_GET["res"];
?>
</div>
</div>
</form>
</body>
</html>