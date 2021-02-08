<html>
<head>
<style type="text/css">
div{
    background-color:#C6EBE8;
    height:250px;
    width:350px;
    border:2px solid blue;
    margin-left:450px;  
    margin-top:50px;
}
th{
   text-align:left;
  }
  table{
       margin-top:10px;
     }
</style>
<script type="text/javascript">
function fun(){
a=document.frm.password.value;
b=document.frm.confirmpassword.value;
if(a!=b)
{
 alert("password and confirm password should be same");
 document.frm.confirmpassword.focus();
}
else if(a.length<8)
{
 alert("password should be at least 8 character");
 document.frm.password.focus();
}
}
</script>
</head>
<body >
<form action="SignUp2.php" method="post" name="frm">
<div>
<table align="center" cellspacing=10>
<tr><th>Name</th><td><input type="text" name="name"></td></tr>
<tr><th>Email Id</th><td><input type="text" name="email"></td></tr>
<tr><th>Password</th><td><input type="password" name="password"></td></tr>
<tr><th>Confirm Password</th><td><input type="password" name="confirmpassword"></td></tr>
<tr><td><input type="submit" value="Register" onclick="fun()";>
</table>
</div>
</form>
</body>
</html>