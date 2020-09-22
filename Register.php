<!DOCTYPE html>
<html lang="en-us">
<head>
<title>Register | Example</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="author" content="Gilbert Oloya"/>
<meta name="keyword" content="Login Sample template"/>
</head>
<body>
<div class="form-inputs">
<form method="POST">
<h2>LRegister Here</h2>
<p>If you have an Account, <a href="">Login</a> here</p>
<form method="POST" action="Register.php" enctype="multipart/form-data"/>
  <label>Email</label>
    <input type="email"  placeholder="Email address" required name="email"  class=""/>
  <label>First name</label>   
  <input type="text"  placeholder="First name" required name="fname"  class=""/>
  
  <label>Last name</label>
  <input type="text"  placeholder="Lastname" required name="lname"  class=""/>
  <label>Gender</label> 
  <select  name="gender" required>
     <option value="Male">Male</option>
     <option value="Female">Female</option>
     <option value="Other">Other</option>  
  </select>
  <label>Date of birth</label>
  <input type="date" name="dob"required/>
  <input type="submit" value="Register" name="reg"/>
  
  
</form>
</div>

</body>
</html>
