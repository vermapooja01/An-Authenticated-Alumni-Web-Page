<?php
include 'Userlogin.php';

    echo <<<_END
<html>
<head>
<title>login page</title>
</head>
<body>
<pre>
<h5 align ='left'>The University of Texas<br/>at El Paso</h5>
<h1 align ='center', style="color:orange;">WELCOME TO ALUMNI ASSOCIATION</h1>
<p>Join CS Alumni Association of UTEP to connect with your fellow classmates of all ages and stay updated regarding the current events going on in the UTEP campus. <br/>It is a great place to share your memories and thoughts. We also welcome your suggestions regarding the betterment of University and work upon them. </p> 
_END;

     echo <<<_END
<p><b>Already a Member? Login Below</b></p>
<form action="Userlogin.php" method = "post">
username:<input type ="text" name = "username" placeholder = "username"><br>
password:<input type ="password" name = "password" placeholder = "username"><br>
<input type = "submit" value = "log in" name="submit">
<p align ='left'>New Users? Connecting is simple. <br/>Register yourself with our Alumni Association.</p>
<a href = "RegistrationForm.php">REGISTER</a>
</form>
</pre>
</body>
</html>
_END;


?>






