<?php
require_once 'login.php';
 $connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die($connection->connect_error);
session_start();
  if (isset($_POST['submit']))
  {
    $un_temp = $_POST['username'];
    $pw_temp = $_POST['password'];

    $query  = "SELECT * FROM registeredusers WHERE username='$un_temp'";
    $result = $connection->query($query);
    if (!$result) die($connection->error);
    
    if ($result->num_rows)
    {
        $row = $result->fetch_assoc();
        $salt1 = "qm&h*";
        $token = hash('ripemd128', "$salt1$un_temp$pw_temp");
        echo "<h5 align = 'left'>The University of Texas<br/> at El Paso</h5>";
echo "<h3><div align = 'center'>UTEP ALUMNI</div></h3>";
        if ($token == $row['password']) 
        {
            
            $_SESSION['username'] = $un_temp;
            $_SESSION['password'] = $pw_temp;
           $_SESSION['firstname'] = $row['firstname'];
           $_SESSION['lastname'] = $row['lastname'];
            $username = $_SESSION['username'];
  $password = $_SESSION['password'];
    $firstname = $_SESSION['firstname'];
    $lastname  = $_SESSION['lastname'];

    echo "Hi $firstname.<br>
          Your full name is $firstname $lastname.<br>
          Your username is '$username'";
    echo "<br/><a href = 'link.php'>Click to see Alumnis</a>";
      echo '<form method="post">
    <input type="submit" value="Logout" name="Logout" >
      </form>
          ';
           
        }
        
    
      else 
      {
          
          echo "<script>alert('invalid username or password')</script>";
          session_destroy();
          echo"<script>window.open('Alumni1.php','_self')</script>";
      }
      
      }
    
    else
    {
    echo "<script>alert('please enter your username and password')</script>";
    session_destroy();
    echo"<script>window.open('Alumni1.php','_self')</script>";
    }
  }
 
    if (isset($_POST['Logout'])) {
    session_destroy();
    echo"<script>window.open('Alumni1.php','_self')</script>";
}
  ?>




