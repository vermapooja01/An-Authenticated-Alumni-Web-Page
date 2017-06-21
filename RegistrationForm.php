<?php
echo <<<_END
    <html>
    <head>
    <title>new users</title>
    </head>
    <body>
    <pre>
<h5 align = 'left'>The University of Texas<br/>at El Paso</h5>
<h2 align = 'center'>THE CS ALUMNI ASSOCIATION</h2>
    <h2 align = 'center'>WELCOME NEW USERS</h2>
<a href = 'Alumni1.php'>Go back to Homepage</a>
    <p>Please fill in the following details to create Alumni profile </p>
<form action="Registration.php" method="POST">
First Name: <input type="text" name="firstname" /><br />
Last Name: <input type="text" name="lastname" /><br />
Username: <input type="text" name="username" /><br />
Email: <input type="text" name="email1" /><br />
Confirm Email: <input type="text" name="email2" /><br />
Password: <input type="password" name="password1" /><br />
Confirm Password: <input type="password" name="password2" /><br />
<input type="submit" value="Register" name="submit" />
</form>
    </pre>
    </body>
_END;
?>


