<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("button").click(function(){
$("#div1").fadeTo("fast",0.1);
$("#div2").fadeTo("slow",0.4);
$("#div3").fadeTo("slow",0.9);
)};
)};
</script></head>
<body>
<button>Click</button><br><br>
<div id="div1" style="width:180px;height:180px;background-color:red;">Abhishek</div><br>
<div id="div2" style="width:180px;height:180px;background-color:red;">Abhishek</div><br>
<div id="div3" style="width:180px;height:180px;background-color:red;">Abhishek</div><br>
</body>
</html>