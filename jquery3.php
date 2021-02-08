<!DOCTYPE html>
<html>
<head>
<style >
 #panal,#flip{
  padding:5px;
  text-align:center;
  background-color:#e5eecc;
  border:solid 1px #c3c3c3;
 }
 #panal{
   padding:50px;
   display:none;
 }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $("#flip").click(function(){
  $("#panal").slideDown("slow");
});
});
</script>

</head>
<body>
<div id="flip">click to slide down</div>
<div id="panal">Abhishek Kumar</div>
</body>
</html>
