<html>
<head>
<style type="text/css">
div{
    background-color:white;
    border:2px solid blue;
    margin-left:430px;
    margin-top:50px;
   height:450px;
   width:400px;
  }
  th{
     text-align:left;
   }
  table{
        margin-top:10px;
       }
</style>
</head>
<body bgcolor=#CCD8E4 >
<form action="reg_form2.php" method="post">
<div>
<table align="center" cellspacing=5>
<tr><th>Name</td><th><input type="text" name="name"></td><tr>
<tr><th>Fees</th><td><input type="text" value=150000 readonly name="fees"></td><tr>
<tr><th>Password</th><td><input type="password" name="password"></td><tr>
<tr><th>Confirm Password</th><td><input type="password" name="confirmpassword"></td><tr>
<tr><th>Gender</th><td><input type="radio" name="gen" value="Male">Male<input type="radio" name="gen" value="Female">Female</td><tr>
<tr><th>Country</th><td><select name="country">
<option>--Select Country--</option>
<option>India</option>
<option>Usa</option>
<option>Japan</option>
<option>Chaina</option>
<option>Australia</option>
<option>Nepal</option>
<option>Pakistan</option>
<option>Rushia</option></select>
</td><tr>
<tr><th>Qualification</th><td><input type="checkbox" name="qul[]" value="10th">10<sup>th</sup>
<input type="checkbox"  name="qul[]" value="12th">12<sup>th</sup><input type="checkbox"  name="qul[]" value="Other">Other</td></tr>
<tr><th>Address</th><td><textarea rows=6 column=7 name="address"></textarea>
<tr><th><input type="submit" value="Register"></th><td><input type="reset" value="cancel"></td></tr>
</table>
</div>

</form>
</body>
</html>