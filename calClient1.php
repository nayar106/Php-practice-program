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
<input type="text" placeholder="Enter a number" name="fno" value="<?php if(isset($_GET['data1']))
echo $_GET['data1']; ?>">

</div>
<div>
<input type="text" placeholder="Enter Second number" name="sno" value="<?php if(isset($_GET["data2"]))
echo $_GET["data2"]; ?>">

</div>
<div>
<input type="text" placeholder="Result" name="result" value="<?php if(isset($_GET['res']))
echo $_GET['res']; ?>">
</div>
<div>
<input type="submit" value="+">
</div>
</div>
</form>
</body>
</html>