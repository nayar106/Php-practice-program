<!doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $("#hide").click(function(){
   $("p").hide();
  });
 $("#show").click(function(){
   $("p").show();
 }); 
});
</script>
</head>
<body>
<button id="hide">Hide Paragraph</button>
<button id="show">Show Paragraph</button>
<hr color="red" size=10>
<p>Abhishek Kumar</p>
</body>
</html>